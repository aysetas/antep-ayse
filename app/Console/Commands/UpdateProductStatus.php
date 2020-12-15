<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Products;
class UpdateProductStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:product-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ürünlerin durumunu güncelle';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $products=Products::all();
        $products->each(function($product){
          $product->update([
            'status'=>false
          ]);
        });

        return 0;

    }
}
