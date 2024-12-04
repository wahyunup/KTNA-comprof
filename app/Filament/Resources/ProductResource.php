<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('productName')
                ->required(),

                TextInput::make('slug')
                ->label('Sub product name')
                ->required(),

                Select::make('category')
                    ->options([
                        'Tanaman' => 'Tanaman',
                        'Makanan' => 'Makanan',
                    ])
                ->required(),

                
                TextInput::make('price')
                ->numeric()
                ->required(),

                TextInput::make('stock')
                ->numeric()
                ->required(),

                Textarea::make('description')
                ->required(),

                FileUpload::make('image_url')
                    ->disk('cloudinary')
                    ->label('Upload Image')
                    ->getUploadedFileNameForStorageUsing(function($file){
                        return "test" . '.' . $file->getClientOriginalExtension();
                    })
                    ->saveUploadedFileUsing(function($file, $set){
                        $uploadFile = Cloudinary::upload($file->getRealPath(), [
                            "folder" => 'ktna_images',
                        ]);

                        $url = $uploadFile->getSecurePath();

                        $set('image', $url);

                        return $url;
                    })
                    ->required(),
                

            ]);
        }
        

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('productName'),
                TextColumn::make('slug')
                ->label('Sub product name'),
                TextColumn::make('price'),
                TextColumn::make('stock'),
                ImageColumn::make('image_url'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
