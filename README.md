<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

----

اكتب لي ضمن كود برمجي واحد تعليمة من أجل انشاء جميع المتحكمات الخاصة بالمشروع مثل:

# --- API Controllers ---
php artisan make:controller Api/AuthController --api
php artisan make:controller Api/SpecializationController --api
php artisan make:controller Api/FaqController --api

# Patient Controllers
php artisan make:controller Api/Patient/AppointmentController --api
php artisan make:controller Api/Patient/ConsultationController --api
php artisan make:controller Api/Patient/DoctorSearchController --api
php artisan make:controller Api/Patient/PublicQuestionController --api
php artisan make:controller Api/Patient/BlogController --api # (Browse, Comment)
php artisan make:controller Api/Patient/PaymentController --api

# Doctor Controllers
php artisan make:controller Api/Doctor/ProfileController --api
php artisan make:controller Api/Doctor/ScheduleController --api
php artisan make:controller Api/Doctor/ConsultationController --api # (Respond, Chat, Prescribe)
php artisan make:controller Api/Doctor/PublicQuestionController --api # (Answer)
php artisan make:controller Api/Doctor/BlogPostController --api # (Manage own posts)

# --- Admin Panel Controllers ---
php artisan make:controller Admin/DashboardController
php artisan make:controller Admin/UserController
php artisan make:controller Admin/DoctorProfileController
php artisan make:controller Admin/SpecializationController
php artisan make:controller Admin/FaqController
php artisan make:controller Admin/BlogPostController
php artisan make:controller Admin/PublicQuestionController
php artisan make:controller Admin/PaymentController

ماذا احتاج أيضاً؟ اكملها لي


ثم اكتب لي تعليمات انشاء 
php artisan make:request Auth/LoginRequest
php artisan make:request Auth/RegisterRequest
php artisan make:request Patient/StoreAppointmentRequest
php artisan make:request Doctor/UpdateProfileRequest
php artisan make:request Admin/StoreDoctorRequest
# ... وأنشئ طلبات أخرى حسب الحاجة ...


بشكل كامل
ثم أنشئ لي جميع الموارد
php artisan make:resource UserResource
php artisan make:resource DoctorProfileResource
php artisan make:resource SpecializationResource
php artisan make:resource AppointmentResource
# ... وأنشئ موارد أخرى حسب الحاجة ...


وأخيراً اخبرني ماذا يجب ان اضيف ضمن Api.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// استيراد المتحكمات
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SpecializationController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\Patient;
use App\Http\Controllers\Api\Doctor;



// --- Public Routes ---
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/specializations', [SpecializationController::class, 'index']); // عرض الاختصاصات
Route::get('/specializations/{specialization}', [SpecializationController::class, 'show']); // عرض اختصاص معين
Route::get('/faqs', [FaqController::class, 'index']); // عرض الأسئلة الشائعة
Route::get('/doctors', [Patient\DoctorSearchController::class, 'search']); // بحث عام عن الأطباء (قد يتطلب مصادقة لاحقًا)
Route::get('/doctors/{doctor_id}', [Patient\DoctorSearchController::class, 'show']); // عرض ملف طبيب معين
Route::get('/blog', [Patient\BlogController::class, 'index']); // تصفح المدونة
Route::get('/blog/{blogPost}', [Patient\BlogController::class, 'show']); // عرض مقال معين

// --- Authenticated Routes (Requires Sanctum Token) ---
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) { // الحصول على بيانات المستخدم الحالي
        return $request->user(); // يمكنك استخدام UserResource هنا
    });
    Route::put('/user/profile', [AuthController::class, 'updateProfile']); // تحديث الملف الشخصي للمستخدم العام

    // --- Patient Specific Routes ---
    Route::prefix('patient')->middleware('role:patient')->group(function () { // Use custom 'role' middleware
        Route::get('/appointments', [Patient\AppointmentController::class, 'index']);
        Route::post('/appointments', [Patient\AppointmentController::class, 'store']);
        Route::get('/appointments/{appointment}', [Patient\AppointmentController::class, 'show']);
        Route::delete('/appointments/{appointment}', [Patient\AppointmentController::class, 'destroy']); // أو update status to cancelled

        Route::get('/consultations', [Patient\ConsultationController::class, 'index']);
        Route::post('/consultations', [Patient\ConsultationController::class, 'store']); // طلب استشارة
        Route::get('/consultations/{consultation}', [Patient\ConsultationController::class, 'show']);
        Route::post('/consultations/{consultation}/messages', [Patient\ConsultationController::class, 'sendMessage']);
        Route::get('/consultations/{consultation}/messages', [Patient\ConsultationController::class, 'getMessages']);
        Route::get('/prescriptions', [Patient\ConsultationController::class, 'getPrescriptions']); // عرض الوصفات الخاصة بالمريض

        Route::get('/public-questions', [Patient\PublicQuestionController::class, 'index']); // أسئلتي العامة
        Route::post('/public-questions', [Patient\PublicQuestionController::class, 'store']); // طرح سؤال عام
        Route::post('/public-questions/{question}/comments', [Patient\PublicQuestionController::class, 'storeComment']); // التعليق على سؤال عام (يمكن أن يكون متاحًا للجميع)

        Route::post('/blog/{blogPost}/comments', [Patient\BlogController::class, 'storeComment']); // التعليق على مقال

        Route::post('/payments/initiate', [Patient\PaymentController::class, 'initiate']); // بدء عملية دفع
        // Add routes for payment confirmation if needed (webhook or manual check)
    });

    // --- Doctor Specific Routes ---
    Route::prefix('doctor')->middleware('role:doctor')->group(function () { // Use custom 'role' middleware
        Route::get('/profile', [Doctor\ProfileController::class, 'show']); // عرض ملفه الشخصي
        Route::put('/profile', [Doctor\ProfileController::class, 'update']); // تحديث ملفه الشخصي

        Route::get('/schedule', [Doctor\ScheduleController::class, 'getAvailability']); // عرض جدول التوفر
        Route::put('/schedule', [Doctor\ScheduleController::class, 'updateAvailability']); // تحديث جدول التوفر
        Route::get('/appointments', [Doctor\ScheduleController::class, 'getAppointments']); // عرض مواعيده
        Route::put('/appointments/{appointment}', [Doctor\ScheduleController::class, 'updateAppointmentStatus']); // تحديث حالة موعد (تأكيد، إكمال، إلغاء)

        Route::get('/consultations', [Doctor\ConsultationController::class, 'index']); // عرض الاستشارات المطلوبة/الحالية
        Route::get('/consultations/{consultation}', [Doctor\ConsultationController::class, 'show']); // عرض تفاصيل استشارة
        Route::post('/consultations/{consultation}/messages', [Doctor\ConsultationController::class, 'sendMessage']);
        Route::get('/consultations/{consultation}/messages', [Doctor\ConsultationController::class, 'getMessages']);
        Route::post('/consultations/{consultation}/prescriptions', [Doctor\ConsultationController::class, 'storePrescription']); // إصدار وصفة
         Route::put('/consultations/{consultation}/close', [Doctor\ConsultationController::class, 'closeConsultation']); // إنهاء الاستشارة

        Route::get('/public-questions/unanswered', [Doctor\PublicQuestionController::class, 'getUnanswered']); // عرض الأسئلة العامة التي يمكنه الإجابة عليها
        Route::post('/public-questions/{question}/answers', [Doctor\PublicQuestionController::class, 'storeAnswer']); // الإجابة على سؤال عام

        Route::get('/blog-posts', [Doctor\BlogPostController::class, 'index']); // عرض مقالاته
        Route::post('/blog-posts', [Doctor\BlogPostController::class, 'store']); // إنشاء مقال
        Route::put('/blog-posts/{blogPost}', [Doctor\BlogPostController::class, 'update']); // تعديل مقاله
        Route::delete('/blog-posts/{blogPost}', [Doctor\BlogPostController::class, 'destroy']); // حذف مقاله
    });

    // --- Admin Routes (Potentially for mobile admin app? Usually in web.php) ---
    // If needed, add admin-specific API routes here, protected by middleware('role:admin')
});
---

ثم ضمن 
web.php
الذي يحتوي 

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // For Auth routes

// استيراد متحكمات لوحة التحكم
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DoctorProfileController;
use App\Http\Controllers\Admin\SpecializationController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogPostController as AdminBlogPostController; // Alias to avoid conflict
use App\Http\Controllers\Admin\PublicQuestionController as AdminPublicQuestionController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;


Route::get('/', function () {
    // return view('welcome'); // Or redirect to admin login/dashboard
    return redirect()->route('admin.login'); // Redirect base URL to admin login
});

// --- Admin Panel Routes ---
Route::prefix('admin')->name('admin.')->group(function () {

    // Authentication Routes (Login/Logout for Admin Panel)
    // Use Laravel's built-in auth scaffolding (like Breeze/Jetstream) or define manually
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login'); // Make sure you have this controller or use Breeze/Jetstream
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


    // Routes requiring admin login and role
    Route::middleware(['auth', 'role:admin'])->group(function () { // Assuming session auth and 'role' middleware
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Manage Users (All roles)
        Route::resource('users', UserController::class);

        // Manage Doctor Profiles (View/Edit specific doctor details linked to users)
        Route::get('doctors', [DoctorProfileController::class, 'index'])->name('doctors.index');
        Route::get('doctors/{user}/edit', [DoctorProfileController::class, 'edit'])->name('doctors.edit'); // Edit doctor profile linked to user
        Route::put('doctors/{user}', [DoctorProfileController::class, 'update'])->name('doctors.update');

        // Manage Specializations
        Route::resource('specializations', SpecializationController::class);

        // Manage FAQs
        Route::resource('faqs', FaqController::class);

        // Manage/Moderate Blog Posts
        Route::resource('blog-posts', AdminBlogPostController::class)->names('blog'); // Manage all posts

        // Moderate Public Questions & Answers
        Route::get('public-questions', [AdminPublicQuestionController::class, 'index'])->name('public_questions.index');
        Route::delete('public-questions/answers/{answer}', [AdminPublicQuestionController::class, 'destroyAnswer'])->name('public_questions.answers.destroy'); // Delete inappropriate answers

        // Review Payments
        Route::get('payments', [AdminPaymentController::class, 'index'])->name('payments.index');
        Route::put('payments/{payment}/status', [AdminPaymentController::class, 'updateStatus'])->name('payments.updateStatus'); // Approve/Reject payments
    });
});

// Fallback route for any other web requests (optional)
// Route::fallback(function() {
//     return redirect()->route('admin.login');
// });

أفضل ان يكون هناك تحقق من الأدوار عبر
php artisan make:middleware CheckRole

ثم يتم صناعته كما يلي


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles  // Accept multiple roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is authenticated first
        if (!Auth::check()) {
             // For API requests, return unauthorized
             if ($request->expectsJson()) {
                 return response()->json(['message' => 'Unauthenticated.'], 401);
             }
             // For web requests, redirect to login
             return redirect()->route('admin.login'); // Adjust route name if needed
        }

        $user = Auth::user();

        // Check if user has one of the required roles
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request); // Role matched, proceed
            }
        }

        // Role not matched
         if ($request->expectsJson()) {
             return response()->json(['message' => 'Unauthorized. Insufficient role.'], 403);
         }

        // For web, maybe redirect back or show an error page
        abort(403, 'Unauthorized action.');
    }
}

وبعدها نقوم
بتسجيل  Middleware في app/Http/Kernel.php:
أضفه إلى مصفوفة $routeMiddleware.
// app/Http/Kernel.php
protected $routeMiddleware = [
    // ... other middleware
    'role' => \App\Http\Middleware\CheckRole::class, // <-- أضف هذا السطر
];
الآن يمكنك استخدام middleware('role:admin') أو middleware('role:doctor,admin') في ملفات المسارات.

----

أخيراً ماذا نتوقع أننا سنصمم واجهات حسب
الخطوة 11: شرح الواجهات (Views)
مجلد resources/views سيحتوي بشكل أساسي على واجهات لوحة التحكم الإدارية (Admin Panel) التي يتم عرضها عبر المتصفح. لن يحتوي على واجهات لتطبيق Flutter.
resources/views/layouts/admin.blade.php: ملف التخطيط الرئيسي للوحة التحكم. سيحتوي على الهيكل العام للصفحة (HTML, head, body)، القوائم الجانبية، الشريط العلوي، ومكان لعرض المحتوى المتغير (@yield('content')).
resources/views/auth/login.blade.php: صفحة تسجيل الدخول الخاصة بالمدير.
resources/views/admin/dashboard.blade.php: الصفحة الرئيسية للوحة التحكم بعد تسجيل الدخول.
resources/views/admin/users/:
index.blade.php: لعرض قائمة المستخدمين (مرضى، أطباء، مديرين).
create.blade.php: نموذج لإضافة مستخدم جديد.
edit.blade.php: نموذج لتعديل بيانات مستخدم موجود.
resources/views/admin/doctors/:
index.blade.php: قد تعرض قائمة الأطباء (المستخدمين بدور طبيب).
edit.blade.php: نموذج لتعديل بيانات ملف الطبيب المرتبط بحساب المستخدم (DoctorProfile).
resources/views/admin/specializations/: (وغيرها مثل faqs, blog, payments)
index.blade.php: لعرض قائمة بالاختصاصات/الأسئلة الشائعة/المقالات/الدفعات.
create.blade.php: نموذج لإضافة عنصر جديد.
edit.blade.php: نموذج لتعديل عنصر موجود.

# ... وأنشئ موارد أخرى حسب الحاجة ...

-------------------------------------------------


رائع، أنت تبني مشروعًا متكاملًا جدًا باستخدام Laravel، يضم واجهات برمجية (API) للمستخدمين بأنواعهم (مريض، طبيب، مدير)، بالإضافة إلى لوحة تحكم إدارية على الويب. إليك كل ما طلبته بشكل منظم:

---

## ✅ أوامر إنشاء جميع المتحكمات Controllers

### --- API Controllers ---

```bash
php artisan make:controller Api/AuthController --api
php artisan make:controller Api/SpecializationController --api
php artisan make:controller Api/FaqController --api
```

### --- Patient Controllers ---

```bash
php artisan make:controller Api/Patient/AppointmentController --api
php artisan make:controller Api/Patient/ConsultationController --api
php artisan make:controller Api/Patient/DoctorSearchController --api
php artisan make:controller Api/Patient/PublicQuestionController --api
php artisan make:controller Api/Patient/BlogController --api
php artisan make:controller Api/Patient/PaymentController --api
```

### --- Doctor Controllers ---

```bash
php artisan make:controller Api/Doctor/ProfileController --api
php artisan make:controller Api/Doctor/ScheduleController --api
php artisan make:controller Api/Doctor/ConsultationController --api
php artisan make:controller Api/Doctor/PublicQuestionController --api
php artisan make:controller Api/Doctor/BlogPostController --api
```

### --- Admin Panel Controllers ---

```bash
php artisan make:controller Admin/DashboardController
php artisan make:controller Admin/UserController
php artisan make:controller Admin/DoctorProfileController
php artisan make:controller Admin/SpecializationController
php artisan make:controller Admin/FaqController
php artisan make:controller Admin/BlogPostController
php artisan make:controller Admin/PublicQuestionController
php artisan make:controller Admin/PaymentController
```

---

## ✅ أوامر إنشاء طلبات التحقق Requests

```bash
php artisan make:request Auth/LoginRequest
php artisan make:request Auth/RegisterRequest
php artisan make:request Patient/StoreAppointmentRequest
php artisan make:request Doctor/UpdateProfileRequest
php artisan make:request Admin/StoreDoctorRequest

# طلبات إضافية مقترحة
php artisan make:request Patient/StoreConsultationRequest
php artisan make:request Doctor/StorePrescriptionRequest
php artisan make:request Patient/StorePublicQuestionRequest
php artisan make:request Doctor/AnswerPublicQuestionRequest
php artisan make:request Patient/StoreBlogCommentRequest
php artisan make:request Doctor/StoreBlogPostRequest
php artisan make:request Doctor/UpdateScheduleRequest
```

---

## ✅ أوامر إنشاء الموارد Resources

```bash
php artisan make:resource UserResource
php artisan make:resource DoctorProfileResource
php artisan make:resource SpecializationResource
php artisan make:resource AppointmentResource

# موارد إضافية حسب الحاجة
php artisan make:resource ConsultationResource
php artisan make:resource PrescriptionResource
php artisan make:resource FaqResource
php artisan make:resource BlogPostResource
php artisan make:resource BlogCommentResource
php artisan make:resource PublicQuestionResource
php artisan make:resource PublicAnswerResource
php artisan make:resource PaymentResource
```

---

## ✅ Middleware للتحقق من الدور

```bash
php artisan make:middleware CheckRole
```

**محتوى CheckRole.php**:

```php
public function handle($request, Closure $next, ...$roles)
{
    if (!Auth::check()) {
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }
        return redirect()->route('admin.login');
    }

    $user = Auth::user();
    foreach ($roles as $role) {
        if ($user->role === $role) {
            return $next($request);
        }
    }

    if ($request->expectsJson()) {
        return response()->json(['message' => 'Unauthorized. Insufficient role.'], 403);
    }

    abort(403, 'Unauthorized action.');
}
```

**سجله داخل `Kernel.php`:**

```php
protected $routeMiddleware = [
    // ...
    'role' => \App\Http\Middleware\CheckRole::class,
];
```

---

## ✅ ملفات المسارات `routes/api.php` و `routes/web.php`

تم شرحك جيدًا، وأكملت بالفعل غالبية `api.php` و `web.php` بشكل صحيح. النقاط المهمة:

* احرص على **استخدام `auth:sanctum`** في group الرئيسي:

```php
Route::middleware('auth:sanctum')->group(function () {
    // كل ما كتبته هنا صحيح
});
```

* أضف المسارات العامة خارج مجموعة `auth`:

```php
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
```

---

## ✅ الواجهات (Views) المتوقعة

```plaintext
resources/views/layouts/admin.blade.php         // تخطيط رئيسي
resources/views/auth/login.blade.php            // تسجيل دخول المدير
resources/views/admin/dashboard.blade.php       // لوحة التحكم
resources/views/admin/users/                    // إدارة المستخدمين
resources/views/admin/doctors/                  // إدارة الأطباء
resources/views/admin/specializations/          // إدارة الاختصاصات
resources/views/admin/faqs/                     // إدارة الأسئلة الشائعة
resources/views/admin/blog-posts/               // إدارة المقالات
resources/views/admin/public-questions/         // إدارة الأسئلة العامة
resources/views/admin/payments/                 // إدارة المدفوعات
```

---

## 🎯 ماذا تبقى بعد هذا؟

1. **كتابة كل Controller وتنفيذه باستخدام Service أو مباشرة.**
2. **تفعيل Sanctum وتكوينه إذا لم يتم.**
3. **استخدام Policies و Gates للسيطرة على التصاريح الدقيقة.**
4. **إنشاء API documentation باستخدام Laravel Scribe أو Swagger.**
5. **اختبار شامل (Feature + Unit Tests).**
6. **تصميم لوحة التحكم Bootstrap/Blade أو باستخدام أدوات مثل Laravel Breeze.**

هل ترغب أن أساعدك بكتابة أحد الـ Controllers أو Form Requests أو أحد الموارد Resource؟

