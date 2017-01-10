<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_dc2d549becf99084d8b6b5ac9f9284df0cf45fcaa60bf413a76666837c367105 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4658f718dec4a1e78c9691c2d6156818bc286d5472ead24b42b5aea4d6536914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4658f718dec4a1e78c9691c2d6156818bc286d5472ead24b42b5aea4d6536914->enter($__internal_4658f718dec4a1e78c9691c2d6156818bc286d5472ead24b42b5aea4d6536914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $__internal_fed083198572da3a9aa34a2c7c9bb3d30762aa7cadf853603ef3d43d0593ad53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed083198572da3a9aa34a2c7c9bb3d30762aa7cadf853603ef3d43d0593ad53->enter($__internal_fed083198572da3a9aa34a2c7c9bb3d30762aa7cadf853603ef3d43d0593ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4658f718dec4a1e78c9691c2d6156818bc286d5472ead24b42b5aea4d6536914->leave($__internal_4658f718dec4a1e78c9691c2d6156818bc286d5472ead24b42b5aea4d6536914_prof);

        
        $__internal_fed083198572da3a9aa34a2c7c9bb3d30762aa7cadf853603ef3d43d0593ad53->leave($__internal_fed083198572da3a9aa34a2c7c9bb3d30762aa7cadf853603ef3d43d0593ad53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4760be11fb10530c36fd3ec1d11e1e18be0f3d94d7fae71524f3f756fe065713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4760be11fb10530c36fd3ec1d11e1e18be0f3d94d7fae71524f3f756fe065713->enter($__internal_4760be11fb10530c36fd3ec1d11e1e18be0f3d94d7fae71524f3f756fe065713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_01b979668ff81971611c8c65fff43bac57aaa16e1c5970fea8a436523e60550e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b979668ff81971611c8c65fff43bac57aaa16e1c5970fea8a436523e60550e->enter($__internal_01b979668ff81971611c8c65fff43bac57aaa16e1c5970fea8a436523e60550e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_01b979668ff81971611c8c65fff43bac57aaa16e1c5970fea8a436523e60550e->leave($__internal_01b979668ff81971611c8c65fff43bac57aaa16e1c5970fea8a436523e60550e_prof);

        
        $__internal_4760be11fb10530c36fd3ec1d11e1e18be0f3d94d7fae71524f3f756fe065713->leave($__internal_4760be11fb10530c36fd3ec1d11e1e18be0f3d94d7fae71524f3f756fe065713_prof);

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
", "@SonataAdmin/CRUD/edit_array.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
