<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_1fdfd0de1ef2cefb5ee1eb0bc9387323faa6fd94f2ffd3edcb7e9a0e1a21bfa5 extends Twig_Template
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
        $__internal_1551144e2ae39f4673dfb563a1a5948b77917cbd281a46b1ac56d46439c68cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1551144e2ae39f4673dfb563a1a5948b77917cbd281a46b1ac56d46439c68cf4->enter($__internal_1551144e2ae39f4673dfb563a1a5948b77917cbd281a46b1ac56d46439c68cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_0e22b57d85289d623c2cbbaa9d6a96c80044daf8405c69e9431a7a81fe7af96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e22b57d85289d623c2cbbaa9d6a96c80044daf8405c69e9431a7a81fe7af96c->enter($__internal_0e22b57d85289d623c2cbbaa9d6a96c80044daf8405c69e9431a7a81fe7af96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_1551144e2ae39f4673dfb563a1a5948b77917cbd281a46b1ac56d46439c68cf4->leave($__internal_1551144e2ae39f4673dfb563a1a5948b77917cbd281a46b1ac56d46439c68cf4_prof);

        
        $__internal_0e22b57d85289d623c2cbbaa9d6a96c80044daf8405c69e9431a7a81fe7af96c->leave($__internal_0e22b57d85289d623c2cbbaa9d6a96c80044daf8405c69e9431a7a81fe7af96c_prof);

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
