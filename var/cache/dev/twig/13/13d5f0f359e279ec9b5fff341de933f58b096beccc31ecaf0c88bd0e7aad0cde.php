<?php

/* /default/_header.html.twig */
class __TwigTemplate_f6979f2b97b0d7f23db0898e340953df8af5e7414203748951c136e085548f66 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/default/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/default/_header.html.twig"));

        // line 1
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>PC</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>Admin</b>PARACOSM</span>
    </a>
    <nav class=\"navbar navbar-static-top\">
        <a href=\"\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        ";
        // line 13
        $this->loadTemplate("/default/_language_toggle.html.twig", "/default/_header.html.twig", 13)->display($context);
        // line 14
        echo "        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                        <span class=\"hidden-xs\">Alexander Pierce</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/default/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  54 => 18,  48 => 14,  46 => 13,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"{{ path('dashboard_index') }}\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>A</b>PC</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>Admin</b>PARACOSM</span>
    </a>
    <nav class=\"navbar navbar-static-top\">
        <a href=\"\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        {% include('/default/_language_toggle.html.twig') %}
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"{{ path ('profile') }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"{{ asset('assets/img/user2-160x160.jpg')}}\" class=\"user-image\" alt=\"User Image\">
                        <span class=\"hidden-xs\">Alexander Pierce</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>", "/default/_header.html.twig", "/home/natali/personal-cabinet-bo/templates/default/_header.html.twig");
    }
}
