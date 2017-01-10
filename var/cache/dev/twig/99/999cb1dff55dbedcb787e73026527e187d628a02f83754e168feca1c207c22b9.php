<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8d8778b5f330f1b163359f31536384f8f76245130a2a16298b45fd82a4e43a94 extends Twig_Template
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
        $__internal_068580b48f07fafe9e5083053798fac74bec082e5b015f424a3f73676a200db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068580b48f07fafe9e5083053798fac74bec082e5b015f424a3f73676a200db9->enter($__internal_068580b48f07fafe9e5083053798fac74bec082e5b015f424a3f73676a200db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_60b1795e10fe5f52986216c2ea0f34b43518964cb4ab486fbc1009ef3e621deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b1795e10fe5f52986216c2ea0f34b43518964cb4ab486fbc1009ef3e621deb->enter($__internal_60b1795e10fe5f52986216c2ea0f34b43518964cb4ab486fbc1009ef3e621deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_068580b48f07fafe9e5083053798fac74bec082e5b015f424a3f73676a200db9->leave($__internal_068580b48f07fafe9e5083053798fac74bec082e5b015f424a3f73676a200db9_prof);

        
        $__internal_60b1795e10fe5f52986216c2ea0f34b43518964cb4ab486fbc1009ef3e621deb->leave($__internal_60b1795e10fe5f52986216c2ea0f34b43518964cb4ab486fbc1009ef3e621deb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
