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

/* profil/detail.html.twig */
class __TwigTemplate_143db11ea666a267618a652e94bedd84a4a03ec88ee332fcbd81436bd8c518d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/detail.html.twig", 1);
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
        echo "     <div class=\"container\">
         <div class=\"row mt-5\">
            <div class=\"col-sm-8 offset-sm-2\">
                 <h1>Vos informations</h1>
                    <table class=\"table table-light table-hover\">
                        <thead>
                        <tr>
                            <th>mail</th>
                            <th>role</th>
                            <th>Mail vérifié</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["informations"]);
        foreach ($context['_seq'] as $context["_key"] => $context["informations"]) {
            // line 18
            echo "                            <tr>
                                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "email", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["informations"], "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</td>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                                
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["informations"], "isVerified", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["informations"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Edit</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['informations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        
                        </tbody>
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
        return "profil/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  115 => 25,  111 => 24,  108 => 23,  99 => 21,  95 => 20,  91 => 19,  88 => 18,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block body %}
     <div class=\"container\">
         <div class=\"row mt-5\">
            <div class=\"col-sm-8 offset-sm-2\">
                 <h1>Vos informations</h1>
                    <table class=\"table table-light table-hover\">
                        <thead>
                        <tr>
                            <th>mail</th>
                            <th>role</th>
                            <th>Mail vérifié</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for informations in informations %}
                            <tr>
                                <td>{{ informations.email }}</td>
                                {% for role in informations.roles %}
                                    <td>{{ role }}</td>
                                {% endfor %}
                                
                                <td>{{ informations.isVerified }}</td>
                                <td><a href=\"{{path('app_profil_edit',{'id': informations.id})}}\">Edit</a></td>
                            </tr>
                        {% endfor %}
                        
                        </tbody>
                    </table>
            </div>
         </div>
     </div>
 {% endblock %}
", "profil/detail.html.twig", "/home/vinc/Documents/dev integ/symphony/tuto/templates/profil/detail.html.twig");
    }
}
