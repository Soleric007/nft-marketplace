<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Edit User</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Gigaland</a></li>
                                    <li class="breadcrumb-item active">Edit User</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form method="POST" action="{{route('admin.users.update', $user->id)}}" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Name</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" value="{{$user->name}}" class="form-control" id="product-title-input" name="name" placeholder="Enter product title" required>
                                        @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Username</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" value="{{$user->username}}" class="form-control" id="product-title-input" name="username" placeholder="Enter product title" required>
                                        @error('username')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Phone</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" value="{{$user->phone}}" class="form-control" id="product-title-input" name="phone" placeholder="Enter product title" required>
                                        @error('phone')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Address</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" value="{{$user->address}}" class="form-control" id="product-title-input" name="address" placeholder="Enter product title" required>
                                        @error('address')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    
                                </div>
                            </div>
                            <!-- end card -->
                            
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Gigaland.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">Design & Develop by Soleric</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
