<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black dark:text-gray-200 leading-tight flex items-center justify-center">
            {{ __('Welcome To The Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="container p-5">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label class="form-label" for="autoSizingInput">Name</label>
            <input type="text" class="form-control" id="autoSizingInput" placeholder="Name">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <label for="exampleDataList" class="form-label">Datalist example</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
              <option value="San Francisco">
              <option value="New York">
              <option value="Seattle">
              <option value="Los Angeles">
              <option value="Chicago">
            </datalist>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Add Gift Wrapper
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary text-black">Sign in</button>
          </div>
        </form>    
    </div>

    <!-- table data -->
    <div class="container p-5">
        <table class="table table-hover">
            <thead>
                <th>1</th>
                <th>2</th>
                <th>3</th>
            </thead>
            <tbody>
                <tr>
                    <td>example</td>
                    <td>example</td>
                    <td>example</td>
                </tr>

                <tr>
                    <td>example</td>
                    <td>example</td>
                    <td>example</td>
                </tr>





                
                <tr>
                    <td>example</td>
                    <td>example</td>
                    <td>example</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</x-app-layout>
