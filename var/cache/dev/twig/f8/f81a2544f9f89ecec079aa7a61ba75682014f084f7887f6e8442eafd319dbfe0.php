<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_791dfa3b8c66a9f0475d7a2311ef3b50916e4d31c8a1f888d45799393e01a8f7 extends Twig_Template
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
        $__internal_9de5c7d15163110a10be464fc2c514cd8bbcefeca479f3e0bb2ea05470716257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de5c7d15163110a10be464fc2c514cd8bbcefeca479f3e0bb2ea05470716257->enter($__internal_9de5c7d15163110a10be464fc2c514cd8bbcefeca479f3e0bb2ea05470716257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_285c06bdc6012f7e09041beac08b398ebdc5bc9ce78f94283eb8c2a777165e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285c06bdc6012f7e09041beac08b398ebdc5bc9ce78f94283eb8c2a777165e22->enter($__internal_285c06bdc6012f7e09041beac08b398ebdc5bc9ce78f94283eb8c2a777165e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9de5c7d15163110a10be464fc2c514cd8bbcefeca479f3e0bb2ea05470716257->leave($__internal_9de5c7d15163110a10be464fc2c514cd8bbcefeca479f3e0bb2ea05470716257_prof);

        
        $__internal_285c06bdc6012f7e09041beac08b398ebdc5bc9ce78f94283eb8c2a777165e22->leave($__internal_285c06bdc6012f7e09041beac08b398ebdc5bc9ce78f94283eb8c2a777165e22_prof);

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
", "@Framework/Form/form_enctype.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
