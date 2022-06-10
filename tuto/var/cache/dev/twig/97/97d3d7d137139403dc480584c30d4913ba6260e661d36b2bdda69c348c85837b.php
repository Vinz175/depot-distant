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

/* disc/_form.html.twig */
class __TwigTemplate_a94eba95b0e7b8f733ac043bd9f70bfce46a2f537531247ba0656b662c26dc8c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class = \"row\">
    <div class=\"col-6\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "Title", [], "any", false, false, false, 5), 'label');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "Title", [], "any", false, false, false, 6), 'widget');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "Title", [], "any", false, false, false, 7), 'help');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "Title", [], "any", false, false, false, 8), 'errors');
        echo "
    </div> <!-- fin div col-6 -->
    <div class=\"col-6\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "label", [], "any", false, false, false, 11), 'row');
        echo "
    <br>
    </div> <!-- fin div col-6 -->
    <div class=\"col-12\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "year", [], "any", false, false, false, 15), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "year", [], "any", false, false, false, 16), 'widget');
        echo "
    <br>
    </div> <!-- fin div col-12 -->
    <div class=\"col-4\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "artist", [], "any", false, false, false, 20), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "artist", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
    </div> <!-- fin div col-4 -->
    <div class=\"col-4\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 'label');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "price", [], "any", false, false, false, 25), 'widget');
        echo "
    </div> <!-- fin div col-4 -->
    <div class=\"col-4\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "picture", [], "any", false, false, false, 28), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "picture", [], "any", false, false, false, 29), 'widget');
        echo "
    </div> <!-- fin div col-4 -->
</div> <!-- fin div row -->
<br>
    <button class=\"btn btn-primary col-2 float-right\">";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 33, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>


";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "disc/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 36,  119 => 33,  112 => 29,  108 => 28,  102 => 25,  98 => 24,  92 => 21,  88 => 20,  81 => 16,  77 => 15,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(form, {\"attr\": {\"novalidate\": \"novalidate\"}}) }}
<div class = \"row\">
    <div class=\"col-6\">
        {{ form_label(form.Title)}}
        {{ form_widget(form.Title) }}
        {{ form_help(form.Title)}}
        {{ form_errors(form.Title)}}
    </div> <!-- fin div col-6 -->
    <div class=\"col-6\">
        {{ form_row(form.label) }}
    <br>
    </div> <!-- fin div col-6 -->
    <div class=\"col-12\">
        {{ form_label(form.year)}}
        {{ form_widget(form.year) }}
    <br>
    </div> <!-- fin div col-12 -->
    <div class=\"col-4\">
        {{ form_label(form.artist)}}
        {{ form_widget(form.artist, {'attr':{'class': 'form-control'}}) }}
    </div> <!-- fin div col-4 -->
    <div class=\"col-4\">
        {{ form_label(form.price)}}
        {{ form_widget(form.price) }}
    </div> <!-- fin div col-4 -->
    <div class=\"col-4\">
        {{ form_label(form.picture)}}
        {{ form_widget(form.picture) }}
    </div> <!-- fin div col-4 -->
</div> <!-- fin div row -->
<br>
    <button class=\"btn btn-primary col-2 float-right\">{{ button_label|default('Sauvegarder') }}</button>


{{ form_end(form) }}
", "disc/_form.html.twig", "/home/vinc/Documents/dev integ/symphony/tuto/templates/disc/_form.html.twig");
    }
}
