<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductTransactionResource\Pages;
use App\Filament\Resources\ProductTransactionResource\RelationManagers;
use App\Models\ProductTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductTransactionResource extends Resource
{
    protected static ?string $model = ProductTransaction::class;

    protected static ?string $navigationLabel = 'Apotek Orders';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                ->tabs([
                    Tabs\Tab::make('Transaksi')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                        ->relationship('user', 'name')
                        ->required(),
                    Forms\Components\TextInput::make('total_amount')
                        ->required()
                        ->numeric(),
                    Forms\Components\Grid::make(3)
                        ->schema([
                            Forms\Components\TextInput::make('city')
                                ->required(),
                            Forms\Components\TextInput::make('post_code')
                                ->required(),
                            Forms\Components\TextInput::make('phone_number')
                                ->tel()
                                ->required(),
                        ]),
                    Forms\Components\Textarea::make('address')
                        ->required()
                        ->columnSpanFull(),
                        
                    Forms\Components\Textarea::make('notes')
                        ->columnSpanFull(),
                        Forms\Components\Toggle::make('is_paid')
                        ->required(),
                    Forms\Components\FileUpload::make('proof')
                        ->required()
                        ->columnSpanFull(),
                    ]),
                    Tabs\Tab::make('Detail Transaksi')
                    ->schema([
                        Forms\Components\Repeater::make('transactionDetails')
                        ->relationship('transactionDetails')
                        ->schema([
                            Forms\Components\Select::make('product_id')
                                ->relationship('product', 'name')
                                ->required(),
                            Forms\Components\TextInput::make('price')
                                ->required()
                                ->numeric(),
                        ])
                    ])
                ])->columnSpanFUll(),
               
               
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_paid')
                    ->boolean(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('post_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProductTransactions::route('/'),
            'create' => Pages\CreateProductTransaction::route('/create'),
            'edit' => Pages\EditProductTransaction::route('/{record}/edit'),
        ];
    }
}
