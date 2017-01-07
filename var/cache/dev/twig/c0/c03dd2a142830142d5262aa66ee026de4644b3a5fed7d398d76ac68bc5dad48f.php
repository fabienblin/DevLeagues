<?php

/* @SonataAdmin/CRUD/base_standard_edit_field.html.twig */
class __TwigTemplate_6af63cdca57249bfe31d96188b5f6203c923c2f46253badf1c27e30944671721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4f5057157795e1b103780d67a95fccc7b2f406676b627b1ea752757f39ed186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f5057157795e1b103780d67a95fccc7b2f406676b627b1ea752757f39ed186->enter($__internal_b4f5057157795e1b103780d67a95fccc7b2f406676b627b1ea752757f39ed186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        $__internal_6c5247842a228577c461e1e752397393cd4af3fb1e4f21a6bfb7f002d40270d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5247842a228577c461e1e752397393cd4af3fb1e4f21a6bfb7f002d40270d7->enter($__internal_6c5247842a228577c461e1e752397393cd4af3fb1e4f21a6bfb7f002d40270d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_b4f5057157795e1b103780d67a95fccc7b2f406676b627b1ea752757f39ed186->leave($__internal_b4f5057157795e1b103780d67a95fccc7b2f406676b627b1ea752757f39ed186_prof);

        
        $__internal_6c5247842a228577c461e1e752397393cd4af3fb1e4f21a6bfb7f002d40270d7->leave($__internal_6c5247842a228577c461e1e752397393cd4af3fb1e4f21a6bfb7f002d40270d7_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_6d571b4a396e6815fe586d1cba281e6971e86396add8aadb7adc210da5372a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d571b4a396e6815fe586d1cba281e6971e86396add8aadb7adc210da5372a00->enter($__internal_6d571b4a396e6815fe586d1cba281e6971e86396add8aadb7adc210da5372a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9ce0a6625e70af4a2b995031897a7bae98fe869f4ef91c39a2e698edfbfd3dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce0a6625e70af4a2b995031897a7bae98fe869f4ef91c39a2e698edfbfd3dec->enter($__internal_9ce0a6625e70af4a2b995031897a7bae98fe869f4ef91c39a2e698edfbfd3dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_9ce0a6625e70af4a2b995031897a7bae98fe869f4ef91c39a2e698edfbfd3dec->leave($__internal_9ce0a6625e70af4a2b995031897a7bae98fe869f4ef91c39a2e698edfbfd3dec_prof);

        
        $__internal_6d571b4a396e6815fe586d1cba281e6971e86396add8aadb7adc210da5372a00->leave($__internal_6d571b4a396e6815fe586d1cba281e6971e86396add8aadb7adc210da5372a00_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_9c7534cf64e59264cd27ccaf12b94debcf0d2539e117a3d651f944cedea0626f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7534cf64e59264cd27ccaf12b94debcf0d2539e117a3d651f944cedea0626f->enter($__internal_9c7534cf64e59264cd27ccaf12b94debcf0d2539e117a3d651f944cedea0626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4f75d571b7036e5e54ecab43ee056eff5218a25561b9591e593c178c83229864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f75d571b7036e5e54ecab43ee056eff5218a25561b9591e593c178c83229864->enter($__internal_4f75d571b7036e5e54ecab43ee056eff5218a25561b9591e593c178c83229864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_4f75d571b7036e5e54ecab43ee056eff5218a25561b9591e593c178c83229864->leave($__internal_4f75d571b7036e5e54ecab43ee056eff5218a25561b9591e593c178c83229864_prof);

        
        $__internal_9c7534cf64e59264cd27ccaf12b94debcf0d2539e117a3d651f944cedea0626f->leave($__internal_9c7534cf64e59264cd27ccaf12b94debcf0d2539e117a3d651f944cedea0626f_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_62e3422ed17b16bcd619ff5c5a982207ebb3c70ee5980900f4fdcc6566582824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e3422ed17b16bcd619ff5c5a982207ebb3c70ee5980900f4fdcc6566582824->enter($__internal_62e3422ed17b16bcd619ff5c5a982207ebb3c70ee5980900f4fdcc6566582824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_21f3bb1eaa2f105d5d9538c2f17a0efbcf82efdc047297fe5d14a4d05ca6fcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f3bb1eaa2f105d5d9538c2f17a0efbcf82efdc047297fe5d14a4d05ca6fcb4->enter($__internal_21f3bb1eaa2f105d5d9538c2f17a0efbcf82efdc047297fe5d14a4d05ca6fcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_21f3bb1eaa2f105d5d9538c2f17a0efbcf82efdc047297fe5d14a4d05ca6fcb4->leave($__internal_21f3bb1eaa2f105d5d9538c2f17a0efbcf82efdc047297fe5d14a4d05ca6fcb4_prof);

        
        $__internal_62e3422ed17b16bcd619ff5c5a982207ebb3c70ee5980900f4fdcc6566582824->leave($__internal_62e3422ed17b16bcd619ff5c5a982207ebb3c70ee5980900f4fdcc6566582824_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_47690982ced6cc380a77da13b0c0a5d1a411e01ea6c57c66a5de34a2d6dcc797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47690982ced6cc380a77da13b0c0a5d1a411e01ea6c57c66a5de34a2d6dcc797->enter($__internal_47690982ced6cc380a77da13b0c0a5d1a411e01ea6c57c66a5de34a2d6dcc797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_8c7da5f1a117f8047cbd8a1a06e1c5b6bfb6b2fbcf4348eb54e6a65689abe0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7da5f1a117f8047cbd8a1a06e1c5b6bfb6b2fbcf4348eb54e6a65689abe0b6->enter($__internal_8c7da5f1a117f8047cbd8a1a06e1c5b6bfb6b2fbcf4348eb54e6a65689abe0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_8c7da5f1a117f8047cbd8a1a06e1c5b6bfb6b2fbcf4348eb54e6a65689abe0b6->leave($__internal_8c7da5f1a117f8047cbd8a1a06e1c5b6bfb6b2fbcf4348eb54e6a65689abe0b6_prof);

        
        $__internal_47690982ced6cc380a77da13b0c0a5d1a411e01ea6c57c66a5de34a2d6dcc797->leave($__internal_47690982ced6cc380a77da13b0c0a5d1a411e01ea6c57c66a5de34a2d6dcc797_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/base_standard_edit_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
