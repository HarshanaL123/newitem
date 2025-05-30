<div class="container">
    <h1>Add New Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <!-- Relevant Store Dropdown -->
        <div class="form-group">
            <label for="relevant_store_id">Relevant Store</label>
            <select name="relevant_store_id" class="form-control">
                <option value="">Choose a Relevant Store</option>
                @foreach ($relevantStores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- ICT Category Dropdown -->
        <div class="form-group">
            <label for="ict_category_id">ICT Category</label>
            <select name="ict_category_id" class="form-control">
                <option value="">Choose an ICT Category</option>
                @foreach ($ictCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Equipment Type Dropdown -->
        <div class="form-group">
            <label for="equipment_type_id">Equipment Type</label>
            <select name="equipment_type_id" class="form-control">
                <option value="">Choose an Equipment Type</option>
                @foreach ($equipmentTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Title Name -->
        <div class="form-group">
            <label for="title_name">Title Name</label>
            <input type="text" name="title_name" class="form-control">
        </div>

        <!-- Item Name -->
        <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" name="item_name" class="form-control">
        </div>

        <!-- Leger Card No -->
        <div class="form-group">
            <label for="leger_card_no">Leger Card No</label>
            <input type="text" name="leger_card_no" class="form-control">
        </div>

        <!-- Manufactured Country -->
        <div class="form-group">
            <label for="manufactured_country">Manufactured Country</label>
            <input type="text" name="manufactured_country" class="form-control">
        </div>

        <!-- Serial Number Available (Checkbox) -->
        <div class="form-group form-check">
            <input type="checkbox" name="serial_number_available" class="form-check-input" value="1">
            <label class="form-check-label" for="serial_number_available">Serial Number Available..?</label>
        </div>

        <!-- Is Unit (Checkbox) -->
        <div class="form-group form-check">
            <input type="checkbox" name="is_unit" class="form-check-input" value="1">
            <label class="form-check-label" for="is_unit">Is Unit..?</label>
        </div>

        <!-- Unit of Issues Dropdown -->
        <div class="form-group">
            <label for="unit_of_issue_id">Unit of Issue</label>
            <select name="unit_of_issue_id" class="form-control">
                <option value="">Choose a Unit of Issue</option>
                @foreach ($unitOfIssues as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Re-Order Level -->
        <div class="form-group">
            <label for="re_order_level">Re-Order Level</label>
            <input type="text" name="re_order_level" class="form-control">
        </div>

        <!-- Commander Reserve -->
        <div class="form-group">
            <label for="commander_reserve">Commander Reserve</label>
            <input type="text" name="commander_reserve" class="form-control">
        </div>

        <!-- Remarks -->
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea name="remarks" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

