<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/showmedecin.html.twig */
class __TwigTemplate_3bcb2e4075f00636791bdca2c01045f71eb5b3d11988381fff44a04f66c2082c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showmedecin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showmedecin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/showmedecin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('nav', $context, $blocks);
        // line 32
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo "                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"#\">H-P Gestion</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                        <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">HOME</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Features</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Pricing</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.medecin.add");
        echo "\">Ajout Medecins</a>
                        </li>
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 
        <div class=\"container\">
                <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>matricule</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Datedenaiss</th>                                
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecins"]) || array_key_exists("medecins", $context) ? $context["medecins"] : (function () { throw new RuntimeError('Variable "medecins" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["medecin"]) {
            echo "               
                            <tr>
                                <td scope=\"row\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "matricule", [], "any", false, false, false, 54), "html", null, true);
            echo "       </td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "prenom", [], "any", false, false, false, 55), "html", null, true);
            echo "       </td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "       </td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "datedenaiss", [], "any", false, false, false, 57), "Y.m.d"), "html", null, true);
            echo "       </td>                               
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "adresse", [], "any", false, false, false, 58), "html", null, true);
            echo "       </td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "telephone", [], "any", false, false, false, 59), "html", null, true);
            echo "       </td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medecin"], "email", [], "any", false, false, false, 60), "html", null, true);
            echo "       </td>
                                <td><a class=\"btn btn-primary\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.medecin.edite", ["id" => twig_get_attribute($this->env, $this->source, $context["medecin"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Editer</a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.medecin.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["medecin"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Delete</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medecin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                    </table>
                    </div>
                </div>
               
        </div>  
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/showmedecin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 66,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  197 => 58,  193 => 57,  189 => 56,  185 => 55,  181 => 54,  177 => 53,  170 => 51,  140 => 32,  120 => 22,  108 => 13,  97 => 4,  87 => 3,  76 => 72,  73 => 32,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    {% block nav %}
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
                    <a class=\"navbar-brand\" href=\"#\">H-P Gestion</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                        <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{path('admin')}}\">HOME</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Features</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Pricing</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{path('admin.medecin.add')}}\">Ajout Medecins</a>
                        </li>
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                        <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
                        <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                    </div>
                </nav>
    {% endblock %}
    {% block content %} 
        <div class=\"container\">
                <div class=\"row\">
                <div class=\"col-md-12\">
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>matricule</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Datedenaiss</th>                                
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for medecin in medecins %}               
                            <tr>
                                <td scope=\"row\">{{medecin.id}}</td>
                                <td>{{medecin.matricule}}       </td>
                                <td>{{medecin.prenom}}       </td>
                                <td>{{medecin.nom}}       </td>
                                <td>{{medecin.datedenaiss | date('Y.m.d')}}       </td>                               
                                <td>{{medecin.adresse}}       </td>
                                <td>{{medecin.telephone}}       </td>
                                <td>{{medecin.email}}       </td>
                                <td><a class=\"btn btn-primary\" href=\"{{path('admin.medecin.edite',{'id':medecin.id})}}\">Editer</a>
                                    <a class=\"btn btn-danger\" href=\"{{path('admin.medecin.delete',{'id':medecin.id})}}\">Delete</a>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    </div>
                </div>
               
        </div>  
    {% endblock %}       
{% endblock %}
            
   









 ", "admin/showmedecin.html.twig", "/home/diakhate/synfonie/sf_hopital/templates/admin/showmedecin.html.twig");
    }
}
