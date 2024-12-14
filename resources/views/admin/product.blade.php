<x-admin.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="flex justify-between items-center mb-3">
        <form action="{{ route('admin.product') }}" method="GET" class="flex items-center gap-2">
            <input type="text" placeholder="search" name="searchProduct"
                class="px-4 py-1 focus:outline-none border rounded !border-primary-100" value="{{ $search }}">
            <button type="submit"
                class="bg-primary-100 hover:bg-primary-50 transition-all duration-150 rounded text- font-semibold text-light py-1 px-2"><i
                    class="ri-search-line"></i></button>
        </form>
        <a href=""
            class="px-3 py-1 bg-primary-100 hover:bg-primary-50 transition-all duration-150 rounded text-sm font-semibold text-light"><i
                class="ri-add-line"></i> Add Product</a>
    </div>
    <table class="table w-full leading-normal mb-3">
        <thead class="bg-secondary-50">
            <tr class="">
                <th class="border p-1 border-secondary-100">No</th>
                <th class="text-start border p-2 border-secondary-100">Nama Produk</th>
                <th class="text-start border p-2 border-secondary-100">Harga</th>
                <th class="text-start border p-2 border-secondary-100">Stok</th>
                <th class="text-start border p-2 border-secondary-100">Kategori</th>
                <th class="text-start border p-2 border-secondary-100 w-[12%]">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProduct as $product)
                <tr>
                    <td class="text-center border p-2">{{ $loop->iteration }}</td>
                    <td class="border p-2">{{ $product->name }}</td>
                    <td class="border p-2">Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="border p-2">{{ $product->stock }}</td>
                    <td class="border p-2">{{ $product->category }}</td>
                    <td class="border p-2 flex gap-3 w-full justify-around">
                        <a href="" class="bg-warning px-3 py-1 rounded text-sm font-semibold">Edit</a>
                        <a href=""
                            class="bg-red-500 text-light px-3 py-1 rounded text-sm font-semibold">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex w-100 justify-end">
        <div class="d-flex">
            {{ $dataProduct->links() }}
        </div>
    </div>
</x-admin.layout>
