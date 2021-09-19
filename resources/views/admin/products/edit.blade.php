<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:36 AM
 */


?>


@component('admin.layout.content')



    @slot('title')

        Edit ...
    @endslot




    <script src="/js/ckeditor/ckeditor.js"></script>






    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-imagebig').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'image_labelbig';

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // second button
            document.getElementById('button-imagesm').addEventListener('click', (event) => {
                event.preventDefault();

                inputId = 'image_labelsm';

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // input
        let inputId = '';

        // set file link
        function fmSetLink($url) {
            document.getElementById(inputId).value = $url;
        }



    </script>




    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit ...</h4>
                </div>
                <div class="card-body">


                    @if($errors->any())

                        <ul class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>


                            @endforeach
                        </ul>

                    @endif


                    <div class="basic-form">
                        <form action="{{route('products.update',['product'=>$product['id']])}}" method="post">

                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" value="{{$product['title']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input name="price" type="text" class="form-control" value="{{$product['price']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Framework</label>
                                    <input name="framework" type="text" class="form-control"
                                           value="{{$product['framework']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Version</label>
                                    <input name="version" type="text" class="form-control"
                                           value="{{$product['version']}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Price</label>
                                    <input name="price" type="text" class="form-control" value="{{$product['price']}}">
                                </div>


                                <div class="form-group col-md-6">
                                    <label>category</label>
                                    <select name="categories[]" class="form-control" multiple>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option value="{{$category['id']}}" {{in_array($category['id'] , $product->Categories->pluck('id')->toArray()) ? 'selected' : ''}}>{{$category['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <br>

                                <div class="form-group col-md-6">
                                    <label>Image Smaill</label>

                                    <div class="input-group">
                                        <input type="text" id="image_labelsm" class="form-control" name="imagesm"
                                           value="{{$product['imagesm']}}"    aria-label="imagesm" aria-describedby="button-imagesm">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-imagesm">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{$product['imagesm']}}">
                                </div>





                                <div class="form-group col-md-6">
                                    <label>Main Image</label>

                                    <div class="input-group">
                                        <input type="text" id="image_labelbig" class="form-control" name="imagebig"
                                               value="{{$product['imagebig']}}"    aria-label="imagebig"  aria-describedby="button-imagebig">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-imagebig">
                                                Select
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{$product['imagebig']}}">
                                </div>


                            </div>


<br>
<br>

                            <div class="form-group col-md-12">
                                <label>Body</label>
                                <textarea class="form-control" rows="5" id="body" name="body">{{$product['body']}}</textarea>
                            </div>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                CKEDITOR.replace( 'body' ,{filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
                            </script>


                            <div class="form-group">
                                <div class="form-check">
                                    @if($product->is_published())
                                        <input name="is_published" class="form-check-input" checked type="checkbox">
                                        <label class="form-check-label">
                                            Published
                                        </label>
                                    @else
                                        <input name="is_published" class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Published
                                        </label>
                                    @endif

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>


                </div>


            </div>


        </div>
    </div>
    </div>
    </div>

@endcomponent
