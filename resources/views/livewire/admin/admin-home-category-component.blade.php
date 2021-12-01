
<!-- component -->
<section class="px-4 antialiased text-gray-600 bg-gray-100">
    <div class="flex justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-5xl p-6 mx-auto bg-white border border-gray-200 rounded-sm shadow-lg">
            <header class="flex justify-center px-5 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800">Manage Home Categories</h2>
            </header>

            <div class="">
                <form class="p-3 space-y-5">
                    <div class="flex justify-evenly">
                    <label>Choose Categories: </label>
                        <select name="" id="" multiple="multiple">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-evenly">
                        <label>No Of Products: </label>
                        <input type="text" >
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 text-white bg-gray-700 rounded">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>




