
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header">Admin panel</li>
          <li class="nav-item">
            <a href="/admin/articles" class="nav-link">
              <i class="nav-icon fas fa-align-justify"></i>
              <p>
                Articles
                <span class="badge badge-info right">{{ $articles->total() }}</span>
              </p>
            </a>
          </li>
         
         
        </ul>
      </nav>
