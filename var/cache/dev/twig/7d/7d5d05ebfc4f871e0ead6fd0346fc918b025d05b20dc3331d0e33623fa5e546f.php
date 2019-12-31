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

/* admin/showspecialite.html.twig */
class __TwigTemplate_099fedffbb5e0e04081081fa324625c80c31ec203eb9cf1f2f8c056bddbdac1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showspecialite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showspecialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/showspecialite.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Libelle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialites"]) || array_key_exists("specialites", $context) ? $context["specialites"] : (function () { throw new RuntimeError('Variable "specialites" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["specialite"]) {
            echo "               
                <tr>
                    <td scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["specialite"], "libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "       </td>
                    <td><a class=\"btn btn-primary\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.specialite.edite", ["id" => twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Editer</a>
                        <a class=\"btn btn-danger\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.specialite.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["specialite"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Delete</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/showspecialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block content %}
    <div class=\"container\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Libelle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for specialite in specialites %}               
                <tr>
                    <td scope=\"row\">{{specialite.id}}</td>
                    <td>{{specialite.libelle}}       </td>
                    <td><a class=\"btn btn-primary\" href=\"{{path('admin.specialite.edite', {'id':specialite.id})}}\">Editer</a>
                        <a class=\"btn btn-danger\" href=\"{{path('admin.specialite.delete', {'id':specialite.id})}}\">Delete</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "admin/showspecialite.html.twig", "/home/diakhate/synfonie/sf_hopital/templates/admin/showspecialite.html.twig");
    }
}
