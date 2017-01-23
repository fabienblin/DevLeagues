<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_1104f1c30d10f7d706d782a8486b570694736aacffebeb3a101ea463801c56a7 extends Twig_Template
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
        $__internal_9fde9556de667cedda97874988086de1666218d7b86f44d9f119ee6594dc9928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde9556de667cedda97874988086de1666218d7b86f44d9f119ee6594dc9928->enter($__internal_9fde9556de667cedda97874988086de1666218d7b86f44d9f119ee6594dc9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $__internal_702a32fec12d97dd846388d7c348f7d7a80ae0ddf4b7a29cf64c214f34b35d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702a32fec12d97dd846388d7c348f7d7a80ae0ddf4b7a29cf64c214f34b35d8d->enter($__internal_702a32fec12d97dd846388d7c348f7d7a80ae0ddf4b7a29cf64c214f34b35d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fde9556de667cedda97874988086de1666218d7b86f44d9f119ee6594dc9928->leave($__internal_9fde9556de667cedda97874988086de1666218d7b86f44d9f119ee6594dc9928_prof);

        
        $__internal_702a32fec12d97dd846388d7c348f7d7a80ae0ddf4b7a29cf64c214f34b35d8d->leave($__internal_702a32fec12d97dd846388d7c348f7d7a80ae0ddf4b7a29cf64c214f34b35d8d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c604d687aa2a18bdbd97d8816e26f487654c8d603ad1adec8aa2e6580d31290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c604d687aa2a18bdbd97d8816e26f487654c8d603ad1adec8aa2e6580d31290->enter($__internal_4c604d687aa2a18bdbd97d8816e26f487654c8d603ad1adec8aa2e6580d31290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_356031e69fa5894519b0eb8612bce39862dc76195307dce1407943f13782ad26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356031e69fa5894519b0eb8612bce39862dc76195307dce1407943f13782ad26->enter($__internal_356031e69fa5894519b0eb8612bce39862dc76195307dce1407943f13782ad26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_356031e69fa5894519b0eb8612bce39862dc76195307dce1407943f13782ad26->leave($__internal_356031e69fa5894519b0eb8612bce39862dc76195307dce1407943f13782ad26_prof);

        
        $__internal_4c604d687aa2a18bdbd97d8816e26f487654c8d603ad1adec8aa2e6580d31290->leave($__internal_4c604d687aa2a18bdbd97d8816e26f487654c8d603ad1adec8aa2e6580d31290_prof);

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
