@extends('layouts.template')

@section('content')

    <div class="container mt-4">

        <div class="d-flex justify-content-between mt-4">
            <h3>News</h3>

            <form action="/post" style="width: 40%;">
                @if (request('category'))
                    <input type="hidden" name="category" value={{ request('category') }}>
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>

        <h3 class="text-center mt-4">What's New</h3>

        <div class="row mt-5 justify-content-around">
            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 1</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 2</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 3</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 4</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 5</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/1200x400?sports" class="img-fluid rounded-top">
                    <div class="card-body">
                        <h5>Post 6</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas eligendi nesciunt, consequatur vero cumque unde aut blanditiis natus dignissimos repellat!
                        </p>
                        <a href="/news" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection