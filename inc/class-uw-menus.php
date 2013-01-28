<?php

class UW_Menus{
    
    private $main_menu;
    private $top_menu;

    function __construct(){
        $this->top_menu = $this->get_top_menu();
        $this->main_menu = $this->get_main_menu();
    }    
    
    function get_menu($menu = ''){
        if ($menu == 'top'){
            return $this->top_menu;
        } else if ($menu == 'main'){
            return $this->main_menu;
        }
        
        return 'undefined menu';
        
    }
        
    
    function get_top_menu(){
        return '<div class="row">
                <div class="twelve columns">                
          <nav class="top-bar">
          
            <ul>
              <!-- Title Area -->
              <li class="name">
                <h1>
                  <a href="#">
                    Top Bar Title
                  </a>
                </h1>
              </li>
              <li class="toggle-topbar"><a href="#"></a></li>
            </ul>

            <section>
              <!-- Left Nav Section -->
              <ul class="left">
                <li class="divider"></li>
                <li class="has-dropdown">
                  <a class="active" href="#">Item 1</a>
                  <ul class="dropdown">
                    <li><label>Section Name</label></li>
                    <li class="has-dropdown">
                      <a href="#" class="">Level 1, Has Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Level 2</a></li>
                        <li><a href="#">Level 2</a></li>
                        <li class="has-dropdown"><a href="#">Level 2, Has Dropdown</a>
                          <ul class="dropdown">
                            <li><label>Section</label></li>
                            <li><a href="#">Level 3</a></li>
                            <li><a href="#">Level 3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Level 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Level 2</a></li>
                        <li><a href="#">Level 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Level 1</a></li>
                    <li><a href="#">Level 1</a></li>
                    <li class="divider"></li>
                    <li><label>Section Name</label></li>
                    <li><a href="#">Level 1</a></li>
                    <li><a href="#">Level 1</a></li>
                    <li><a href="#">Level 1</a></li>
                    <li class="divider"></li>
                    <li><a href="#">See all &rarr;</a></li>
                  </ul>
                </li>
                <li class="divider hide-for-small"></li>
              </ul>

              <!-- Right Nav Section -->
              <ul class="right">
                <li class="divider show-for-medium-and-up"></li>
                <li class="has-dropdown">
                  <a href="#">Item 2</a>
                  <ul class="dropdown">
                    <li><label>Section Name</label></li>
                    <li><a href="#" class="">Level 1</a></li>
                    <li><a href="#">Dropdown Option</a></li>
                    <li><a href="#">Dropdown Option</a></li>
                    <li class="divider"></li>
                    <li><label>Section Name</label></li>
                    <li><a href="#">Dropdown Option</a></li>
                    <li><a href="#">Dropdown Option</a></li>
                    <li><a href="#">Dropdown Option</a></li>
                    <li class="divider"></li>
                    <li><a href="#">See all &rarr;</a></li>
                  </ul>
                </li>
              </ul>
            </section>
          </nav>
        </div>
      </div>';
    }
    
    function get_main_menu(){
        return'<!-- Entire Navbar Code -->
        <ul class="nav-bar">
        
          <li class="active"><a href="#">Nav Item One</a></li>
          
          <li class="has-flyout">
            <a href="#">Nav Item 2</a>
            <a href="#" class="flyout-toggle"><span> </span></a>
            <ul class="flyout">
              <li><a href="#">Sub Nav Item 1</a></li>
              <li><a href="#">Sub Nav Item Two</a></li>
              <li><a href="#">Sub Nav 3</a></li>
              <li><a href="#">Sub Nav 4</a></li>
              <li><a href="#">Sub Nav Item 5</a></li>
            </ul>
          </li>
          

          <li class="has-flyout">
            <a href="#">Nav Item 3</a>
            <a href="#" class="flyout-toggle"><span> </span></a>
            <div class="flyout">
              <h5>Regular Dropdown</h5>
              <div class="row">
                <div class="six columns">
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                </div>
                <div class="six columns">
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                </div>
              </div>
            </div>
          </li>
          
          <li class="has-flyout">
            <a href="#">Nav Item 4</a>
            <a href="#" class="flyout-toggle"><span> </span></a>
            <div class="flyout large right">
              <h5>Large Dropdown</h5>
              <div class="row">
                <div class="four columns">
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                </div>
                <div class="four columns">
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                  <p>This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.</p>
                </div>
                <div class="four columns">
                  <img src="http://placehold.it/200x250" />
                </div>
              </div>
            </div>
          </li></ul>';
    }
    
}
?>