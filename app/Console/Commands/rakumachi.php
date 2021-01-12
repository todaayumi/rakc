<?php


namespace App\Console\Commands;

define("PHP_QUERY_LIB", "phpQuery\phpQuery\phpQuery.php");
require PHP_QUERY_LIB;

use Illuminate\Console\Command;
use \phpQuery;



class rakumachi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '楽待サイトをクロールし、更新情報があればお知らせします。';

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

       
    }
}
