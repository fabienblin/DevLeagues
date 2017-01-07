<?php

/* @DevLeagues/Challenge/edit.html.twig */
class __TwigTemplate_3d5d8cea3abfaaa673c22a68ad475a1e1a4410fcf07f4764f9b5d35be0fcbbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743a1b62366fc8f4f8b1312406e15ccf3860443a339dbe27da89464569f302b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743a1b62366fc8f4f8b1312406e15ccf3860443a339dbe27da89464569f302b4->enter($__internal_743a1b62366fc8f4f8b1312406e15ccf3860443a339dbe27da89464569f302b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $__internal_5195ec32f9d7fab643646906fa5e4c10dcdc6ec174938df1ca1507603b7f0afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5195ec32f9d7fab643646906fa5e4c10dcdc6ec174938df1ca1507603b7f0afa->enter($__internal_5195ec32f9d7fab643646906fa5e4c10dcdc6ec174938df1ca1507603b7f0afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743a1b62366fc8f4f8b1312406e15ccf3860443a339dbe27da89464569f302b4->leave($__internal_743a1b62366fc8f4f8b1312406e15ccf3860443a339dbe27da89464569f302b4_prof);

        
        $__internal_5195ec32f9d7fab643646906fa5e4c10dcdc6ec174938df1ca1507603b7f0afa->leave($__internal_5195ec32f9d7fab643646906fa5e4c10dcdc6ec174938df1ca1507603b7f0afa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41076b1f9f99f5be7f95f93adb5d1ba3c9b1ae4a5d6154e0bb54cf4e1fb375a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41076b1f9f99f5be7f95f93adb5d1ba3c9b1ae4a5d6154e0bb54cf4e1fb375a7->enter($__internal_41076b1f9f99f5be7f95f93adb5d1ba3c9b1ae4a5d6154e0bb54cf4e1fb375a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3b1f580dff6e8fda42694a503b9c14bed8702ba1056bd96d6aa9ad664853613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b1f580dff6e8fda42694a503b9c14bed8702ba1056bd96d6aa9ad664853613->enter($__internal_f3b1f580dff6e8fda42694a503b9c14bed8702ba1056bd96d6aa9ad664853613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:edit page</h1>
";
        
        $__internal_f3b1f580dff6e8fda42694a503b9c14bed8702ba1056bd96d6aa9ad664853613->leave($__internal_f3b1f580dff6e8fda42694a503b9c14bed8702ba1056bd96d6aa9ad664853613_prof);

        
        $__internal_41076b1f9f99f5be7f95f93adb5d1ba3c9b1ae4a5d6154e0bb54cf4e1fb375a7->leave($__internal_41076b1f9f99f5be7f95f93adb5d1ba3c9b1ae4a5d6154e0bb54cf4e1fb375a7_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}

{% block body %}
<h1>Welcome to the Challenge:edit page</h1>
{% endblock %}
", "@DevLeagues/Challenge/edit.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/edit.html.twig");
    }
}
