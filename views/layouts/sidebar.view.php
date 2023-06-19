<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div class="app-sidebar__user-avatar">
            <i class="fa fa-user"></i>
        </div>
        <div>
            <p class="app-sidebar__user-name"><?print_r($_SESSION['date']["name"])?></p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Fakultet</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/fakulty"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/fakulty/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-sitemap"></i><span class="app-menu__label">Yo'nalish</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/direction"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/direction/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview">
                <i class="app-menu__icon fa fa-sitemap"></i><span class="app-menu__label">Kafedra</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/kafedra"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/kafedra/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-object-group"></i><span class="app-menu__label">Guruh</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/group"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/group/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-graduation-cap"></i><span class="app-menu__label">Talabalar</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/student"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/student/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-question-circle" aria-hidden="true"></i><span class="app-menu__label">Amaliyot</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/amaliyot"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/amaliyot/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="/" data-toggle="treeview">
                <i class="app-menu__icon fa fa-user-circle" aria-hidden="true"></i>
                <span class="app-menu__label">O'qituvchi</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/teachers"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/teachers/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="/" data-toggle="treeview"><i class="app-menu__icon fa fa-tasks"></i>
                <span class="app-menu__label">Topshiriq berish</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="/topshiriq"><i class="icon fa fa-eye"></i> Ko'rish</a></li>
                <li><a class="treeview-item" href="/topshiriq/create"><i class="icon fa fa-plus"></i> Qo'shish</a></li>
            </ul>
        </li>
    </ul>
</aside>