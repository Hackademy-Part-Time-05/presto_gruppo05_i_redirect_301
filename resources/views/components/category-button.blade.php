<form class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 my-2 categoryButton">
    <button type='submit' formaction='{{ route('categoryShow', compact('category')) }}' class="border w-100 welcome-card_link {{$category->name}}_background">
        <div class="welcome-card_bg {{$category->name}}_background {{$category->name}}_background_card text-center welcome-card"></div>
        <div class="">
            <a href="" class="welcome-card_title">{{$category->name}}</a>
        </div>
    </button>  
</form>