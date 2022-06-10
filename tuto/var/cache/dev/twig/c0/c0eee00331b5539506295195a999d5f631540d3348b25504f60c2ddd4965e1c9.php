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

/* _header.html.twig */
class __TwigTemplate_305369238b1fdec1470544b371409b4ecd3dd639a117108be9bf389f1568705e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
<a class=\"navbar-brand\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_first");
        echo "\">Accueil</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav nav-tabs mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_index");
        echo "\">Detail des disques</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_new");
        echo "\">Ajouter un disque</a>
        </li>
    </ul>
    <ul class=\"navbar-nav ml-auto\">
        ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "    
            <li class=\"nav-link\"> 
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\"><i class=\"fa-solid fa-user\"></i></a>
            </li>
            <li class=\"nav-link \">
                <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
            </li>
            
            
        ";
        } else {
            // line 28
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'enregistrer</a>
            </li>
                    <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Se connecter</a>
            </li>
        ";
        }
        // line 35
        echo "        
    </ul>
</div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  99 => 32,  93 => 29,  90 => 28,  82 => 23,  76 => 20,  72 => 18,  70 => 17,  63 => 13,  57 => 10,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
<a class=\"navbar-brand\" href=\"{{ path('app_first') }}\">Accueil</a>
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
</button>

<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav nav-tabs mr-auto\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path(\"app_disc_index\") }}\">Detail des disques</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path(\"app_disc_new\") }}\">Ajouter un disque</a>
        </li>
    </ul>
    <ul class=\"navbar-nav ml-auto\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
    
            <li class=\"nav-link\"> 
                <a href=\"{{ path(\"profil\")}}\"><i class=\"fa-solid fa-user\"></i></a>
            </li>
            <li class=\"nav-link \">
                <a href=\"{{path('app_logout')}}\">Se déconnecter</a>
            </li>
            
            
        {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"app_register\") }}\">S'enregistrer</a>
            </li>
                    <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path(\"login\") }}\">Se connecter</a>
            </li>
        {% endif %}
        
    </ul>
</div>
</nav>
", "_header.html.twig", "/home/vinc/Documents/dev integ/symphony/tuto/templates/_header.html.twig");
    }
}
