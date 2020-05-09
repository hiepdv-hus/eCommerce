<?php
namespace App\Providers;

use App\Http\Data\Input\NewsInput;
use App\Http\Data\Input\CustomerInput;
use App\Http\Data\Input\SystemUserInput;
use App\Http\Data\Input\UserInput;
use App\Http\Data\Output\CategoryOutput;
use App\Http\Models\Category;
use App\Libraries\Flat\Collection;
use App\Libraries\Flat\Entities\CategoryEntity;
use App\Libraries\Request\Data\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param Request $request
     * @return void
     */
    public function boot(Request $request)
    {
        $firstSegment = $request->segment(1);
        if($firstSegment && $firstSegment === env('APP_ENTRY_BACKEND'))
        {
            //== Share variables with all views ======
            // App entry backend
            View::share('ENTRY', env('APP_ENTRY_BACKEND'));

            // theme
            View::share('THEME', 'admin._shared.layout');

            // variable for meta
            View::share('WEB_NAME', '');
            View::share('DOMAIN_NAME', '');
            View::share('APP_URL', '');

            // variable for share
            View::share('SITE_NAME', 'GenCRM - Giao thương CMS');
            View::share('SITE_TITLE', 'GenCRM - Giao thương CMS');
            View::share('SITE_KEYWORD', '');
            View::share('SITE_DESCRIPTION', '');
            View::share('SITE_URL', '');
            View::share('SITE_THUMBNAIL', asset(''));
        }
        else{
            //== Share variables with all views ======
            // theme
            View::share('THEME', '_shared.layout');

            // variable for meta
            View::share('REFRESH_TIME', 1800);
            View::share('WEB_NAME', '');
            View::share('DOMAIN_NAME', '');
            View::share('APP_URL', '');

            // variable for share
            View::share('SITE_NAME', 'GenCRM - Giao thương Online');
            View::share('SITE_TITLE', 'GenCRM - Giao thương Online');
            View::share('SITE_KEYWORD', '');
            View::share('SITE_DESCRIPTION', '');
            View::share('SITE_URL', '');
            View::share('SITE_THUMBNAIL', asset(''));

            View::share('Giao_Thuong_List', [
                [
                    'title' => 'Đây là danh sách giao thương',
                    'description' => 'Đây là phần mô tả'
                ]
            ]);
        }

//        try {
//            $categories = Category::with(
//                CategoryEntity::is_active()->equal(1)
//                    ->and(CategoryEntity::is_top()->equal(1)))
//                ->loadCollectionAll()->toOutput(CategoryOutput::class);
//        } catch (\Exception $exception) {
//            $categories = new \App\Libraries\Request\Data\Collection(CategoryOutput::class);
//            // Ignores exception
//        }
//
//        View::share('_categories', $categories);
//        View::share('_category_id', 0);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $inputs = include_once app_path('Http/Data/RegisterInput.php');
        if (!empty($inputs)) {
            foreach ($inputs as $inputClass) {
                $this->app->bind($inputClass, function($app) use($inputClass){
                    return new $inputClass($app->request->all());
                });
            }
        }
    }
}
