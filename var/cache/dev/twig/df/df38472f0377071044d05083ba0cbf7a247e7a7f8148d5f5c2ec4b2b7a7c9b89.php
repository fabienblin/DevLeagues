<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_fd973612ba612be25ddd2cf3b1c0e98173f64b2cfc1030a61992eacc7857a060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e91c4c0804f1419cdd1fc79fe819308f9ecec0682b27187217f34477d4b40282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91c4c0804f1419cdd1fc79fe819308f9ecec0682b27187217f34477d4b40282->enter($__internal_e91c4c0804f1419cdd1fc79fe819308f9ecec0682b27187217f34477d4b40282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        $__internal_f6db5b783b11fff5b611bfd1f827f8f29790bd225bff30918031b5c6414703de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6db5b783b11fff5b611bfd1f827f8f29790bd225bff30918031b5c6414703de->enter($__internal_f6db5b783b11fff5b611bfd1f827f8f29790bd225bff30918031b5c6414703de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_e91c4c0804f1419cdd1fc79fe819308f9ecec0682b27187217f34477d4b40282->leave($__internal_e91c4c0804f1419cdd1fc79fe819308f9ecec0682b27187217f34477d4b40282_prof);

        
        $__internal_f6db5b783b11fff5b611bfd1f827f8f29790bd225bff30918031b5c6414703de->leave($__internal_f6db5b783b11fff5b611bfd1f827f8f29790bd225bff30918031b5c6414703de_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd418bece6c21fbf3032553f113d6659e155881167337ee32b51c8c61b5b70d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd418bece6c21fbf3032553f113d6659e155881167337ee32b51c8c61b5b70d4->enter($__internal_dd418bece6c21fbf3032553f113d6659e155881167337ee32b51c8c61b5b70d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_06bc0ffdc11996a711467cf2cab135906b12892d256ab69f32428a03e5656d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc0ffdc11996a711467cf2cab135906b12892d256ab69f32428a03e5656d20->enter($__internal_06bc0ffdc11996a711467cf2cab135906b12892d256ab69f32428a03e5656d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_06bc0ffdc11996a711467cf2cab135906b12892d256ab69f32428a03e5656d20->leave($__internal_06bc0ffdc11996a711467cf2cab135906b12892d256ab69f32428a03e5656d20_prof);

        
        $__internal_dd418bece6c21fbf3032553f113d6659e155881167337ee32b51c8c61b5b70d4->leave($__internal_dd418bece6c21fbf3032553f113d6659e155881167337ee32b51c8c61b5b70d4_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_2ca3e1452b3b1269f861510f86c903f2514af7bae072c64f374cb666539b63a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca3e1452b3b1269f861510f86c903f2514af7bae072c64f374cb666539b63a4->enter($__internal_2ca3e1452b3b1269f861510f86c903f2514af7bae072c64f374cb666539b63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f594be3387e3597c686d60f1df05862a0d856bbbbb3b13509405eadd4bfe0b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f594be3387e3597c686d60f1df05862a0d856bbbbb3b13509405eadd4bfe0b27->enter($__internal_f594be3387e3597c686d60f1df05862a0d856bbbbb3b13509405eadd4bfe0b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_f594be3387e3597c686d60f1df05862a0d856bbbbb3b13509405eadd4bfe0b27->leave($__internal_f594be3387e3597c686d60f1df05862a0d856bbbbb3b13509405eadd4bfe0b27_prof);

        
        $__internal_2ca3e1452b3b1269f861510f86c903f2514af7bae072c64f374cb666539b63a4->leave($__internal_2ca3e1452b3b1269f861510f86c903f2514af7bae072c64f374cb666539b63a4_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_b49107adf33007b149a0a6d4a922e4a7e4f71efdd55065991a23ebbd24091d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49107adf33007b149a0a6d4a922e4a7e4f71efdd55065991a23ebbd24091d48->enter($__internal_b49107adf33007b149a0a6d4a922e4a7e4f71efdd55065991a23ebbd24091d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_e991080b118a5604244c0bcda2773a7591d0bb996ef1099b85060058835e3493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e991080b118a5604244c0bcda2773a7591d0bb996ef1099b85060058835e3493->enter($__internal_e991080b118a5604244c0bcda2773a7591d0bb996ef1099b85060058835e3493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_e991080b118a5604244c0bcda2773a7591d0bb996ef1099b85060058835e3493->leave($__internal_e991080b118a5604244c0bcda2773a7591d0bb996ef1099b85060058835e3493_prof);

        
        $__internal_b49107adf33007b149a0a6d4a922e4a7e4f71efdd55065991a23ebbd24091d48->leave($__internal_b49107adf33007b149a0a6d4a922e4a7e4f71efdd55065991a23ebbd24091d48_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
