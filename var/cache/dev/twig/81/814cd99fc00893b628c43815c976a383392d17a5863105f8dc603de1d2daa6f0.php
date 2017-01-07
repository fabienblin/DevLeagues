<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_f765f19d0b1ad67b2e476322daf4011c0c90d9a319965bff74c2c30e90410e50 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c8b0c984c19d6d1b9ab8b1226ff2ce2617beca3a8ce2b08e5f972c7a2a069f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c8b0c984c19d6d1b9ab8b1226ff2ce2617beca3a8ce2b08e5f972c7a2a069f->enter($__internal_77c8b0c984c19d6d1b9ab8b1226ff2ce2617beca3a8ce2b08e5f972c7a2a069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $__internal_483481f24802021ed1b7f82956fc839a02aa597291d228cf24103d6bb65c2860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483481f24802021ed1b7f82956fc839a02aa597291d228cf24103d6bb65c2860->enter($__internal_483481f24802021ed1b7f82956fc839a02aa597291d228cf24103d6bb65c2860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c8b0c984c19d6d1b9ab8b1226ff2ce2617beca3a8ce2b08e5f972c7a2a069f->leave($__internal_77c8b0c984c19d6d1b9ab8b1226ff2ce2617beca3a8ce2b08e5f972c7a2a069f_prof);

        
        $__internal_483481f24802021ed1b7f82956fc839a02aa597291d228cf24103d6bb65c2860->leave($__internal_483481f24802021ed1b7f82956fc839a02aa597291d228cf24103d6bb65c2860_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4f561140fbc1f5e14987bf09be16e5af355d0cb926d6060eadc306d798737d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f561140fbc1f5e14987bf09be16e5af355d0cb926d6060eadc306d798737d1->enter($__internal_c4f561140fbc1f5e14987bf09be16e5af355d0cb926d6060eadc306d798737d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_97fc8105d53b578322af1a5ab60eb5a6d9f4f6ea9c7797726fddade284b360a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fc8105d53b578322af1a5ab60eb5a6d9f4f6ea9c7797726fddade284b360a4->enter($__internal_97fc8105d53b578322af1a5ab60eb5a6d9f4f6ea9c7797726fddade284b360a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_97fc8105d53b578322af1a5ab60eb5a6d9f4f6ea9c7797726fddade284b360a4->leave($__internal_97fc8105d53b578322af1a5ab60eb5a6d9f4f6ea9c7797726fddade284b360a4_prof);

        
        $__internal_c4f561140fbc1f5e14987bf09be16e5af355d0cb926d6060eadc306d798737d1->leave($__internal_c4f561140fbc1f5e14987bf09be16e5af355d0cb926d6060eadc306d798737d1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "@SonataAdmin/CRUD/edit_array.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
