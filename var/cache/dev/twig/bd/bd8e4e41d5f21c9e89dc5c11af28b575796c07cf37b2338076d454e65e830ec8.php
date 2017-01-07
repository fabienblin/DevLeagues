<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_31ce90bcc0c7f467e5dbc8ecb16c4bef5fa20c4fdbe00b70352bf981a4c68b52 extends Twig_Template
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
        $__internal_8079580490bb1abd85bbbf84ffa6e725fbcb16c9a13947270c0d2b2bb5d1a899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8079580490bb1abd85bbbf84ffa6e725fbcb16c9a13947270c0d2b2bb5d1a899->enter($__internal_8079580490bb1abd85bbbf84ffa6e725fbcb16c9a13947270c0d2b2bb5d1a899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4a36e33e745178af3f72dd205cb5b86e3ed740f7c7ee2ad11cfe556594e7c084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a36e33e745178af3f72dd205cb5b86e3ed740f7c7ee2ad11cfe556594e7c084->enter($__internal_4a36e33e745178af3f72dd205cb5b86e3ed740f7c7ee2ad11cfe556594e7c084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8079580490bb1abd85bbbf84ffa6e725fbcb16c9a13947270c0d2b2bb5d1a899->leave($__internal_8079580490bb1abd85bbbf84ffa6e725fbcb16c9a13947270c0d2b2bb5d1a899_prof);

        
        $__internal_4a36e33e745178af3f72dd205cb5b86e3ed740f7c7ee2ad11cfe556594e7c084->leave($__internal_4a36e33e745178af3f72dd205cb5b86e3ed740f7c7ee2ad11cfe556594e7c084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
