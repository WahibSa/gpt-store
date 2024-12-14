<div class="col-span-2 border h-screen p-6">
    <div class="mb-12">
        <h1 class="font-semibold text-primary-100 text-2xl text-center">OpenAI Store</h1>
    </div>
    <ul class="w-full flex flex-col gap-3 mb-8">
        <li class="w-full">
            <a href="{{ route('admin.dashboard') }}"
                class=" p-2 px-4  font-semibold rounded-2xl {{ request()->is('admin') ? 'bg-primary-100 text-light' : 'text-dark' }} w-full flex items-center gap-2"><i
                    class="ri-home-5-line text-xl"></i>Beranda</a>
        </li>
        <li class="w-full">
            <a href="{{ route('admin.product') }}"
                class=" p-2 px-4 {{ request()->is('admin/product') ? 'bg-primary-100 text-light' : 'text-dark' }} font-semibold rounded-2xl w-full flex items-center gap-2">
                <i class="ri-stack-line"></i>Data Produk</a>
        </li>
        <li class="w-full">
            <a href="" class=" p-2 px-4 text-dark font-semibold rounded-2xl w-full flex items-center gap-2">
                <i class="ri-stack-line"></i>Data Produk</a>
        </li>
    </ul>
    <a href="#" class=" text-red-500 font-semibold text-lg mt-18 px-4">Logout</a>
</div>
