<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_7d5bf2b23b23351aa787422a2224803c42ccb8e8f7e6801f9224f3c3104ee1b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f1fd752c28460eb3ee022dcf584f57b4b05d065003cfac0cc17a942350e57cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1fd752c28460eb3ee022dcf584f57b4b05d065003cfac0cc17a942350e57cd->enter($__internal_9f1fd752c28460eb3ee022dcf584f57b4b05d065003cfac0cc17a942350e57cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        $__internal_32518fe7ac34bc5e4d660762ccf3441e9f2af21fa3b3ead727befe42f9811109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32518fe7ac34bc5e4d660762ccf3441e9f2af21fa3b3ead727befe42f9811109->enter($__internal_32518fe7ac34bc5e4d660762ccf3441e9f2af21fa3b3ead727befe42f9811109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_9f1fd752c28460eb3ee022dcf584f57b4b05d065003cfac0cc17a942350e57cd->leave($__internal_9f1fd752c28460eb3ee022dcf584f57b4b05d065003cfac0cc17a942350e57cd_prof);

        
        $__internal_32518fe7ac34bc5e4d660762ccf3441e9f2af21fa3b3ead727befe42f9811109->leave($__internal_32518fe7ac34bc5e4d660762ccf3441e9f2af21fa3b3ead727befe42f9811109_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_3eaaea091b1bd965017a1594531afd25cf08ec2cd6c98e8e8cbd418d62306db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaaea091b1bd965017a1594531afd25cf08ec2cd6c98e8e8cbd418d62306db0->enter($__internal_3eaaea091b1bd965017a1594531afd25cf08ec2cd6c98e8e8cbd418d62306db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_b3777937db8e1d212245b9989fee570c120e42de147227387bbc11543fd667ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3777937db8e1d212245b9989fee570c120e42de147227387bbc11543fd667ef->enter($__internal_b3777937db8e1d212245b9989fee570c120e42de147227387bbc11543fd667ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_b3777937db8e1d212245b9989fee570c120e42de147227387bbc11543fd667ef->leave($__internal_b3777937db8e1d212245b9989fee570c120e42de147227387bbc11543fd667ef_prof);

        
        $__internal_3eaaea091b1bd965017a1594531afd25cf08ec2cd6c98e8e8cbd418d62306db0->leave($__internal_3eaaea091b1bd965017a1594531afd25cf08ec2cd6c98e8e8cbd418d62306db0_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_6af2b1548dd604fe08217f12a3ad7522d0b90a4f68502473ad1a84ebaff8df66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af2b1548dd604fe08217f12a3ad7522d0b90a4f68502473ad1a84ebaff8df66->enter($__internal_6af2b1548dd604fe08217f12a3ad7522d0b90a4f68502473ad1a84ebaff8df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_259479b2d095495e7367c6e8a939cb4f73d722d4b3ac6f733b8325060ec61175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259479b2d095495e7367c6e8a939cb4f73d722d4b3ac6f733b8325060ec61175->enter($__internal_259479b2d095495e7367c6e8a939cb4f73d722d4b3ac6f733b8325060ec61175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_259479b2d095495e7367c6e8a939cb4f73d722d4b3ac6f733b8325060ec61175->leave($__internal_259479b2d095495e7367c6e8a939cb4f73d722d4b3ac6f733b8325060ec61175_prof);

        
        $__internal_6af2b1548dd604fe08217f12a3ad7522d0b90a4f68502473ad1a84ebaff8df66->leave($__internal_6af2b1548dd604fe08217f12a3ad7522d0b90a4f68502473ad1a84ebaff8df66_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_filter_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
