
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route('personal.main.index')}}" class="nav-link">
                    <i class="fa-solid fa-chart-pie"></i>
                    <p>Статистика</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.licked.index')}}" class="nav-link">
                    <i class="fa-regular fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="fa-regular fa-comment"></i>
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>

