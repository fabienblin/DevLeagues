<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_b71c8358659eaefeda6755e127648d994c11f8425a6c68c917ef12fd74d280e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47fb6a83b316690b674e1363f2f6f3f7b7e4e0577af6cbc4c089f1d238d1191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47fb6a83b316690b674e1363f2f6f3f7b7e4e0577af6cbc4c089f1d238d1191->enter($__internal_e47fb6a83b316690b674e1363f2f6f3f7b7e4e0577af6cbc4c089f1d238d1191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_d1db0a6c783d7c9ecf83f1eba209764e0543f72bc72bf83bfb2a04387a09a4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db0a6c783d7c9ecf83f1eba209764e0543f72bc72bf83bfb2a04387a09a4ad->enter($__internal_d1db0a6c783d7c9ecf83f1eba209764e0543f72bc72bf83bfb2a04387a09a4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e47fb6a83b316690b674e1363f2f6f3f7b7e4e0577af6cbc4c089f1d238d1191->leave($__internal_e47fb6a83b316690b674e1363f2f6f3f7b7e4e0577af6cbc4c089f1d238d1191_prof);

        
        $__internal_d1db0a6c783d7c9ecf83f1eba209764e0543f72bc72bf83bfb2a04387a09a4ad->leave($__internal_d1db0a6c783d7c9ecf83f1eba209764e0543f72bc72bf83bfb2a04387a09a4ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
