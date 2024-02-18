@foreach ($projects as $project)
<div class="col-xl-4 col-md-6">
    <a href="#" class="imageCard -type-2 hover-btn-explore">
        <div class="imageCard__image relative ratio ratio-45:40">
            <img src="/assets/images/projects/{{str_replace(' ', '-', strtolower($project))}}.jpg" alt="image" class="img-ratio" />

            <div class="hover-btn-explore__item">
                <button class="button text-white bg-dark-1 size-120 fw-500 rounded-full">Explore</button>
            </div>
        </div>

        <h3 class="imageCard__title text-dark-1">{{$project}}</h3>
        <p class="imageCard__text text-dark-1">
            <a href="#">View project</a>
        </p>
    </a>
</div>
@endforeach