<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig */
class __TwigTemplate_6041d632267f0184fb26a17d335604fe56b184bbaafd86418375b2fa6ebf20da extends Twig_Template
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
        $__internal_7d9d6e38d91355376537f3f265782f93efa7cd7711b702bacb7714c3a3153519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9d6e38d91355376537f3f265782f93efa7cd7711b702bacb7714c3a3153519->enter($__internal_7d9d6e38d91355376537f3f265782f93efa7cd7711b702bacb7714c3a3153519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

        $__internal_ed03a06d513dfc07ff55f395f3fd66937bcc2979e53939efdde3aaa10a9b2a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed03a06d513dfc07ff55f395f3fd66937bcc2979e53939efdde3aaa10a9b2a57->enter($__internal_ed03a06d513dfc07ff55f395f3fd66937bcc2979e53939efdde3aaa10a9b2a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_7d9d6e38d91355376537f3f265782f93efa7cd7711b702bacb7714c3a3153519->leave($__internal_7d9d6e38d91355376537f3f265782f93efa7cd7711b702bacb7714c3a3153519_prof);

        
        $__internal_ed03a06d513dfc07ff55f395f3fd66937bcc2979e53939efdde3aaa10a9b2a57->leave($__internal_ed03a06d513dfc07ff55f395f3fd66937bcc2979e53939efdde3aaa10a9b2a57_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_modal.html.twig");
    }
}
