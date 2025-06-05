<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
@include('navbar');
<body class="bg-gray-100 font-sans">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-12 mt-12">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-700">Add New Item</h1>

        <form action="{{ route('items.store') }}" method="POST" class="grid grid-cols-3 gap-5 items-center">
            @csrf

            <label for="relevant_store_id" class="font-medium text-gray-700">Relevant Store</label>
            <select name="relevant_store_id" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                <option value="">Choose a Relevant Store</option>
                @foreach ($relevantStores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>

            <label for="ict_category_id" class="font-medium text-gray-700">ICT Category</label>
            <select name="ict_category_id" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                <option value="">Choose an ICT Category</option>
                @foreach ($ictCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <label for="equipment_type_id" class="font-medium text-gray-700">Equipment Type</label>
            <select name="equipment_type_id" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                <option value="">Choose an Equipment Type</option>
                @foreach ($equipmentTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>

            <label for="title_name" class="font-medium text-gray-700">Title Name</label>
            <input type="text" name="title_name" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">

            <label for="item_name" class="font-medium text-gray-700">Item Name</label>
            <input type="text" name="item_name" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Item Name">

            <label for="leger_card_no" class="font-medium text-gray-700">Leger Card No</label>
            <input type="text" name="leger_card_no" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Leger Card No">

            <label for="manufactured_country" class="font-medium text-gray-700">Manufactured Country</label>
            <input type="text" name="manufactured_country" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Manufactured Country">

            <label for="serial_number_available" class="font-medium text-gray-700">Serial Number Available..?</label>
            <label class="col-span-2 inline-flex items-center cursor-pointer">
                <input type="checkbox" name="serial_number_available" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:bg-blue-600 relative after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-5"></div>
            </label>

            <label for="is_unit" class="font-medium text-gray-700">Is Unit..?</label>
            <label class="col-span-2 inline-flex items-center cursor-pointer">
                <input type="checkbox" name="is_unit" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:bg-blue-600 relative after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-5"></div>
            </label>

            <label for="unit_of_issue_id" class="font-medium text-gray-700">Unit of Issue</label>
            <select name="unit_of_issue_id" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500">
                <option value="">Choose a Unit of Issue</option>
                @foreach ($unitOfIssues as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>

            <label for="re_order_level" class="font-medium text-gray-700">Re-Order Level</label>
            <input type="text" name="re_order_level" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Re-Order Level">

            <label for="commander_reserve" class="font-medium text-gray-700">Commander Reserve</label>
            <input type="text" name="commander_reserve" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Commander Reserve">

            <label for="remarks" class="font-medium text-gray-700">Remarks</label>
            <textarea name="remarks" class="col-span-2 border border-gray-300 rounded-md p-2 focus:ring-2 focus:ring-blue-500" placeholder="Remarks"></textarea>

            <button type="submit" class="col-span-3 mt-6 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Submit</button>
        </form>
    </div>
</body>
</html>
