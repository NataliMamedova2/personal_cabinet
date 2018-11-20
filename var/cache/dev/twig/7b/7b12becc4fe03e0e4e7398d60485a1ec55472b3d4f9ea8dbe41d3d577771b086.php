<?php

/* /users/list.html.twig */
class __TwigTemplate_e83c25019a96d11fab2679688c5400415df6e41e53e1a0e0509804c38263d2af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "/users/list.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/users/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/users/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.users");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
       <div class=\"col-xs-12\">
           <div class=\"box\">
               <div class=\"box-header\">
                   <h3 class=\"box-title\">";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.table.title");
        echo "</h3>
                   <div class=\"pull-right box-tools\">
                       <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add");
        echo "\">
                           <button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.add");
        echo "\">
                               <i class=\"fa fa-plus\"></i>
                           </button>
                       </a>
                   </div>
               </div>
               <div class=\"box-body\">
                   <div id=\"example2_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                       <div class=\"row\">
                           <div class=\"col-sm-6\"></div>
                           <div class=\"col-sm-6\"></div>
                       </div>
                       <div class=\"col-sm-12\">
                           <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"example2_info\">
                               <thead>
                               <tr role=\"row\">
                                   <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\">
                                       ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.first.name");
        echo "
                                   </th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\">
                                       ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.last.name");
        echo "
                                   </th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Platform(s): activate to sort column ascending\">Login</th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\">Email</th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\">
                                       ";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.actions");
        echo "
                                   </th>
                               </tr>
                               </thead>
                               ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 41
            echo "                                   <tr class=\"odd\">

                                       <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                                       <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                                       <td>
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                           <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.delete");
            echo "\">
                                               <i class=\"fa fa-trash-o\"></i>
                                           </a>&nbsp;&nbsp;&nbsp;&nbsp;

                                       </td>
                                   </tr>
                               ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                                   <tr>
                                       <td colspan=\"5\">";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users.no.record.found");
            echo "</td>
                                   </tr>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                               <tbody>

                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/users/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  173 => 57,  170 => 56,  156 => 49,  150 => 46,  146 => 45,  142 => 44,  138 => 43,  134 => 41,  129 => 40,  122 => 36,  114 => 31,  108 => 28,  88 => 11,  84 => 10,  79 => 8,  73 => 4,  64 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block main %} {{ 'menu.users' |trans|raw  }}{% endblock %}
{% block body %}
    <div class=\"row\">
       <div class=\"col-xs-12\">
           <div class=\"box\">
               <div class=\"box-header\">
                   <h3 class=\"box-title\">{{  'users.table.title' |trans|raw  }}</h3>
                   <div class=\"pull-right box-tools\">
                       <a href=\"{{ path('user_add') }}\">
                           <button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"{{ 'users.add' |trans|raw  }}\">
                               <i class=\"fa fa-plus\"></i>
                           </button>
                       </a>
                   </div>
               </div>
               <div class=\"box-body\">
                   <div id=\"example2_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                       <div class=\"row\">
                           <div class=\"col-sm-6\"></div>
                           <div class=\"col-sm-6\"></div>
                       </div>
                       <div class=\"col-sm-12\">
                           <table id=\"example2\" class=\"table table-bordered table-hover dataTable\" role=\"grid\" aria-describedby=\"example2_info\">
                               <thead>
                               <tr role=\"row\">
                                   <th class=\"sorting_asc\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Rendering engine: activate to sort column descending\" aria-sort=\"ascending\">
                                       {{  'users.first.name' |trans|raw  }}
                                   </th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\">
                                       {{  'users.last.name' |trans|raw  }}
                                   </th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Platform(s): activate to sort column ascending\">Login</th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Engine version: activate to sort column ascending\">Email</th>
                                   <th class=\"sorting\" tabindex=\"0\" aria-controls=\"example2\" rowspan=\"1\" colspan=\"1\" aria-label=\"CSS grade: activate to sort column ascending\">
                                       {{  'users.actions' |trans|raw  }}
                                   </th>
                               </tr>
                               </thead>
                               {% for user in users %}
                                   <tr class=\"odd\">

                                       <td>{{ user.firstName }}</td>
                                       <td>{{ user.lastName }}</td>
                                       <td>{{ user.username }}</td>
                                       <td>{{ user.email }}</td>
                                       <td>
                                           &nbsp;&nbsp;&nbsp;&nbsp;
                                           <a href=\"{{ path('user_delete', {'id': user.id}) }}\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"{{ 'users.delete' |trans|raw  }}\">
                                               <i class=\"fa fa-trash-o\"></i>
                                           </a>&nbsp;&nbsp;&nbsp;&nbsp;

                                       </td>
                                   </tr>
                               {% else %}
                                   <tr>
                                       <td colspan=\"5\">{{  'users.no.record.found' |trans|raw  }}</td>
                                   </tr>
                               {% endfor %}
                               <tbody>

                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
{% endblock %}", "/users/list.html.twig", "/home/natali/personal-cabinet-bo/templates/users/list.html.twig");
    }
}
