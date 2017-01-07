<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_da9fdd7afe88078fddfb9d559202ce58df51c7c9a8bf8dfde9e6685959547cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d182f34112fced83adac31c4054b7173e5372f33fe8279ec0e4975f7c8a758d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d182f34112fced83adac31c4054b7173e5372f33fe8279ec0e4975f7c8a758d1->enter($__internal_d182f34112fced83adac31c4054b7173e5372f33fe8279ec0e4975f7c8a758d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $__internal_757fa00be0affe29abdfa117409ff661f6882815be18078e6e81666724b6346d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757fa00be0affe29abdfa117409ff661f6882815be18078e6e81666724b6346d->enter($__internal_757fa00be0affe29abdfa117409ff661f6882815be18078e6e81666724b6346d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d182f34112fced83adac31c4054b7173e5372f33fe8279ec0e4975f7c8a758d1->leave($__internal_d182f34112fced83adac31c4054b7173e5372f33fe8279ec0e4975f7c8a758d1_prof);

        
        $__internal_757fa00be0affe29abdfa117409ff661f6882815be18078e6e81666724b6346d->leave($__internal_757fa00be0affe29abdfa117409ff661f6882815be18078e6e81666724b6346d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6e07b527c1703e497da1f85e4aa653d1b40e6425786d0d8a9720b3402a7fe99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e07b527c1703e497da1f85e4aa653d1b40e6425786d0d8a9720b3402a7fe99->enter($__internal_c6e07b527c1703e497da1f85e4aa653d1b40e6425786d0d8a9720b3402a7fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7a49cd3fe8a566a2e2eab1a372d11dbb7562f517307232fcfbc337180fb4ed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a49cd3fe8a566a2e2eab1a372d11dbb7562f517307232fcfbc337180fb4ed84->enter($__internal_7a49cd3fe8a566a2e2eab1a372d11dbb7562f517307232fcfbc337180fb4ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7a49cd3fe8a566a2e2eab1a372d11dbb7562f517307232fcfbc337180fb4ed84->leave($__internal_7a49cd3fe8a566a2e2eab1a372d11dbb7562f517307232fcfbc337180fb4ed84_prof);

        
        $__internal_c6e07b527c1703e497da1f85e4aa653d1b40e6425786d0d8a9720b3402a7fe99->leave($__internal_c6e07b527c1703e497da1f85e4aa653d1b40e6425786d0d8a9720b3402a7fe99_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_text.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
