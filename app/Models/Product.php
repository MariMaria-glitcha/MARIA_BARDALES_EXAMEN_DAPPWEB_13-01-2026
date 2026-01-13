<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'codigo',
        'precio',
        'stock',
        'categoria',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    /**
     * Verificar si el producto tiene stock disponible
     */
    public function tieneStock(): bool
    {
        return $this->stock > 0;
    }

    /**
     * Verificar si el stock está bajo (menos de 10 unidades)
     */
    public function stockBajo(): bool
    {
        return $this->stock < 10 && $this->stock > 0;
    }

    /**
     * Verificar si el producto está agotado
     */
    public function agotado(): bool
    {
        return $this->stock === 0;
    }
}
