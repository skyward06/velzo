<form action="{{ route('product.search') }}" id="form-search-top name="form-search-top" >
<div class="flex items-center" style=" flex: 1; ">
    <input type="text" name="search" value="{{ $search }}" class="w-full border-none rounded-l-md" style="height: px; padding: 10px" placeholder="Search here ..." >
    <button type="submit" form="form-search-top">
        <x-heroicon-o-search class="rounded-r-md" style="padding: 5px; height: 45px !important; background-color:#cd9042; " />
    </button>
</div>
</form>
