<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_445fd82cc3fb6e73c3a70e0ae27fd98e227915d3cb17b30bc6e1b7b0243fb634 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_082e2539265808cb5c529a9d47ffced0f2dd5bb1784a9980ff9319129e762984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082e2539265808cb5c529a9d47ffced0f2dd5bb1784a9980ff9319129e762984->enter($__internal_082e2539265808cb5c529a9d47ffced0f2dd5bb1784a9980ff9319129e762984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $__internal_4ac9e38fa1db96a833b3a95baa523777395396476d1ee0c655737704b1c0fa0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9e38fa1db96a833b3a95baa523777395396476d1ee0c655737704b1c0fa0f->enter($__internal_4ac9e38fa1db96a833b3a95baa523777395396476d1ee0c655737704b1c0fa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_082e2539265808cb5c529a9d47ffced0f2dd5bb1784a9980ff9319129e762984->leave($__internal_082e2539265808cb5c529a9d47ffced0f2dd5bb1784a9980ff9319129e762984_prof);

        
        $__internal_4ac9e38fa1db96a833b3a95baa523777395396476d1ee0c655737704b1c0fa0f->leave($__internal_4ac9e38fa1db96a833b3a95baa523777395396476d1ee0c655737704b1c0fa0f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_55d7d58895b2c22497ad38ea7875d3f22cf81e47f30c70d5651cc76c17d9e078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d7d58895b2c22497ad38ea7875d3f22cf81e47f30c70d5651cc76c17d9e078->enter($__internal_55d7d58895b2c22497ad38ea7875d3f22cf81e47f30c70d5651cc76c17d9e078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_63c3a00c5d14e0243d0d8a6e1230edb2da25c581c5e4001fe501f618c978387a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c3a00c5d14e0243d0d8a6e1230edb2da25c581c5e4001fe501f618c978387a->enter($__internal_63c3a00c5d14e0243d0d8a6e1230edb2da25c581c5e4001fe501f618c978387a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_63c3a00c5d14e0243d0d8a6e1230edb2da25c581c5e4001fe501f618c978387a->leave($__internal_63c3a00c5d14e0243d0d8a6e1230edb2da25c581c5e4001fe501f618c978387a_prof);

        
        $__internal_55d7d58895b2c22497ad38ea7875d3f22cf81e47f30c70d5651cc76c17d9e078->leave($__internal_55d7d58895b2c22497ad38ea7875d3f22cf81e47f30c70d5651cc76c17d9e078_prof);

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
", "@SonataAdmin/CRUD/edit_text.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
