<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_9cb58fa6b53877737546bcdda6b36237045d5ba646c68bbe47aa4b536214f5ac extends Twig_Template
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
        $__internal_eb009f2765698926e7cef23f8645f2436a69d745491f18cfa39297f6ac226c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb009f2765698926e7cef23f8645f2436a69d745491f18cfa39297f6ac226c5a->enter($__internal_eb009f2765698926e7cef23f8645f2436a69d745491f18cfa39297f6ac226c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $__internal_7a508a516515fe481a45db166583defc20b2119adbb75d90ab6c28f15b3732bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a508a516515fe481a45db166583defc20b2119adbb75d90ab6c28f15b3732bb->enter($__internal_7a508a516515fe481a45db166583defc20b2119adbb75d90ab6c28f15b3732bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb009f2765698926e7cef23f8645f2436a69d745491f18cfa39297f6ac226c5a->leave($__internal_eb009f2765698926e7cef23f8645f2436a69d745491f18cfa39297f6ac226c5a_prof);

        
        $__internal_7a508a516515fe481a45db166583defc20b2119adbb75d90ab6c28f15b3732bb->leave($__internal_7a508a516515fe481a45db166583defc20b2119adbb75d90ab6c28f15b3732bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d7057ca839366c9774cd53b6ede1138bbc3be3867223910839a2ded4b6f4613f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7057ca839366c9774cd53b6ede1138bbc3be3867223910839a2ded4b6f4613f->enter($__internal_d7057ca839366c9774cd53b6ede1138bbc3be3867223910839a2ded4b6f4613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_215ea28b3239d61ec7c67f19004aae41d840b62345c02683f8e197931d1e728c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215ea28b3239d61ec7c67f19004aae41d840b62345c02683f8e197931d1e728c->enter($__internal_215ea28b3239d61ec7c67f19004aae41d840b62345c02683f8e197931d1e728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_215ea28b3239d61ec7c67f19004aae41d840b62345c02683f8e197931d1e728c->leave($__internal_215ea28b3239d61ec7c67f19004aae41d840b62345c02683f8e197931d1e728c_prof);

        
        $__internal_d7057ca839366c9774cd53b6ede1138bbc3be3867223910839a2ded4b6f4613f->leave($__internal_d7057ca839366c9774cd53b6ede1138bbc3be3867223910839a2ded4b6f4613f_prof);

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
