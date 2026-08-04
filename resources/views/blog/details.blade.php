@include('layouts.header')

<!-- Header (Sama seperti sebelumnya) -->
<header id="header" class="header-contrast d-flex align-items-center fixed-top">
  <!-- ... Isi header tetap sama ... -->
</header>

<!-- Blog Details Section -->
<section id="blog-details" class="blog-details section">
  <div class="blog-container"> <!-- Wrapper Baru -->
  
    <!-- Bagian Kiri: Konten Utama -->
    <article class="content">
      <div class="btn-back">
        <a href="{{ route('blog') }}">
          {{ svg('heroicon-o-arrow-long-left') }} <span>Back</span>
        </a>
      </div>
        
      <h1 class="title">{{ $blog->title }}</h1>
  
      <div class="meta-top">
          <ul>
              <li class="d-flex align-items-center">
                  <i class="bi bi-clock"></i>
                  <time datetime="{{ $blog->created_at }}">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</time>
              </li>
          </ul>
      </div>
  
      <div class="image">
          <img src="{{ asset('storage/' . $blog->image1) }}" class="img-fluid" alt="">
      </div>
  
      <div>{!! $blog->desc1 !!}</div>
  
      @if($blog->image2)
      <div class="image image-2">
          <img src="{{ asset('storage/' . $blog->image2) }}" class="img-fluid" alt="">
      </div>
      @endif
          
      <div class="mt-4">{!! $blog->desc2 !!}</div>
    </article>

    <!-- Bagian Kanan: Sidebar Artikel Lain -->
    <aside class="sidebar">
      <h3 class="sidebar-title">Related Articles</h3>
      <div class="recent-posts">
        @foreach($recentBlogs as $recent)
        <div class="recent-item">
          <!-- Sesuaikan nama route dengan yang Anda gunakan untuk halaman detail -->
          <a href="{{ url('blog/'.$recent->slug) }}"> 
            <img src="{{ asset('storage/' . $recent->image1) }}" alt="{{ $recent->title }}">
            <div class="recent-info">
              <h4>{{ $recent->title }}</h4>
              <time datetime="{{ $recent->created_at }}">{{ \Carbon\Carbon::parse($recent->created_at)->format('d M Y') }}</time>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </aside>
    
  </div>
</section>
  
@include('layouts.footer')