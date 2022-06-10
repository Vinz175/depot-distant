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

/* disc/index.html.twig */
class __TwigTemplate_9d46ab17ddc4b772e0f10ce83865062bcc2eb44690983eca734612911ed1e8a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Disc index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "
    
    <h1>Disc index <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_new");
            echo "\"><i class=\"fa-solid fa-plus\"></i></a></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Year</th>
                <th>Picture</th>
                <th>Label</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discs"]) || array_key_exists("discs", $context) ? $context["discs"] : (function () { throw new RuntimeError('Variable "discs" does not exist.', 25, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["disc"]) {
                // line 26
                echo "            <tr>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "title", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "year", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "label", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "price", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_show", ["id" => twig_get_attribute($this->env, $this->source, $context["disc"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"><i class=\"fa-solid fa-eye\"></i></a>
                    ";
                // line 35
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 36
                    echo "                         <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["disc"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\">edit</a>
                        
                    ";
                }
                // line 39
                echo "                </td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 42
                echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </tbody>
    </table>

";
        } else {
            // line 50
            echo "    <div>
        <span>Pour visualiser le contenu, merci de vous connecter</span>
    </div>
";
        }
        // line 54
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 54,  180 => 50,  174 => 46,  165 => 42,  158 => 39,  151 => 36,  149 => 35,  145 => 34,  140 => 32,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  117 => 26,  112 => 25,  94 => 10,  90 => 8,  88 => 7,  78 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    

{% block title %}Disc index{% endblock %}
{% block body %}
{% if is_granted('IS_AUTHENTICATED_FULLY') %}

    
    <h1>Disc index <a href=\"{{ path('app_disc_new') }}\"><i class=\"fa-solid fa-plus\"></i></a></h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Year</th>
                <th>Picture</th>
                <th>Label</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for disc in discs %}
            <tr>
                <td>{{ disc.id }}</td>
                <td>{{ disc.title }}</td>
                <td>{{ disc.year }}</td>
                <td>{{ disc.picture }}</td>
                <td>{{ disc.label }}</td>
                <td>{{ disc.price }}</td>
                <td>
                    <a href=\"{{ path('app_disc_show', {'id': disc.id}) }}\"><i class=\"fa-solid fa-eye\"></i></a>
                    {% if is_granted('ROLE_ADMIN') %}
                         <a href=\"{{ path('app_disc_edit', {'id': disc.id}) }}\">edit</a>
                        
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% else %}
    <div>
        <span>Pour visualiser le contenu, merci de vous connecter</span>
    </div>
{% endif %}

{% endblock %}
", "disc/index.html.twig", "/home/vinc/Documents/dev integ/symphony/tuto/templates/disc/index.html.twig");
    }
}
