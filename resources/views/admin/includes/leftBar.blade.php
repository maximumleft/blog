
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route('admin.post.index')}}" class="nav-link">
                    <i class="fa-solid fa-table-list"></i>
                    <p>
                        Посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="fa-solid fa-list"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <i class="fa-solid fa-hashtag"></i>
                    <p>
                        Теги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.info.index')}}" class="nav-link">
                    <i class="fa-solid fa-circle-question"></i>
                    <p>Инфо</p>
                </a>
            </li>
        </ul>
    </div>
</aside>

