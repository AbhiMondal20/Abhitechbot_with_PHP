  <nav className="navbar">
        {/* <!-- LOGO --> */}
        <div className="logo">MUO</div>

        {/* <!-- NAVIGATION MENU --> */}
        <ul className="nav-links">
          {/* <!-- USING CHECKBOX HACK --> */}
          <input
            type="checkbox"
            id="checkbox_toggle"
            checked={menuVisible}
            onChange={handleToggleMenu}
          />
          <label htmlFor="checkbox_toggle" className="hamburger">
            &#9776;
          </label>

          {/* <!-- NAVIGATION MENUS --> */}
          <div className={`menu ${menuVisible ? "visible" : ""}`}>
            <li><a href="/">Home</a></li>
            <li><a href="/">About</a></li>

            <li className="services">
              <a href="/">Services</a>

              {/* <!-- DROPDOWN MENU --> */}
              <ul className="dropdown">
                <li><a href="/">Dropdown 1 </a></li>
                <li><a href="/">Dropdown 2</a></li>
                <li><a href="/">Dropdown 3</a></li>
                <li><a href="/">Dropdown 4</a></li>
              </ul>
            </li>

            <li><a href="/">Pricing</a></li>
            <li><a href="/">Contact</a></li>
          </div>
        </ul>
      </nav>