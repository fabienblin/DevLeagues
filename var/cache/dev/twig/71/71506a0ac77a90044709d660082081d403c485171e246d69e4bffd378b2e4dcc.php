<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0979f8cd5143139293a0cd71157073c0a23791b277e1516e25c16959745a3111 extends Twig_Template
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
        $__internal_84a49863febb7c0ca7d1dcf432618720ca576d4d87fd1046d782a13b238c0424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a49863febb7c0ca7d1dcf432618720ca576d4d87fd1046d782a13b238c0424->enter($__internal_84a49863febb7c0ca7d1dcf432618720ca576d4d87fd1046d782a13b238c0424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_7559ac62c1368544db0f98b07c7fd0b7df1940f34f378ad5b4af80d899c49214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7559ac62c1368544db0f98b07c7fd0b7df1940f34f378ad5b4af80d899c49214->enter($__internal_7559ac62c1368544db0f98b07c7fd0b7df1940f34f378ad5b4af80d899c49214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_84a49863febb7c0ca7d1dcf432618720ca576d4d87fd1046d782a13b238c0424->leave($__internal_84a49863febb7c0ca7d1dcf432618720ca576d4d87fd1046d782a13b238c0424_prof);

        
        $__internal_7559ac62c1368544db0f98b07c7fd0b7df1940f34f378ad5b4af80d899c49214->leave($__internal_7559ac62c1368544db0f98b07c7fd0b7df1940f34f378ad5b4af80d899c49214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
