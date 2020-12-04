<?php
/**
 *  app/Models/Size.php
 *
 * User: 
 * Date-Time: 02.12.20
 * Time: 18:37
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable =['title'];
    protected $table = 'sizes';
    protected $primarykey = 'id';
}