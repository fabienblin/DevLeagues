<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_156d2531488e94f5326dcbe23d7ab00a4f1f6bae5a700327977ea62de2173fcb extends Twig_Template
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
        $__internal_88765b21554d1875b692256b7ba13c9df9772723c79b7b9c7a5c322f1fb008a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88765b21554d1875b692256b7ba13c9df9772723c79b7b9c7a5c322f1fb008a4->enter($__internal_88765b21554d1875b692256b7ba13c9df9772723c79b7b9c7a5c322f1fb008a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e17468599c4cead4c29a12a53729aeb75d49d0b8a03dd6e65f72c4fe15885c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17468599c4cead4c29a12a53729aeb75d49d0b8a03dd6e65f72c4fe15885c39->enter($__internal_e17468599c4cead4c29a12a53729aeb75d49d0b8a03dd6e65f72c4fe15885c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_88765b21554d1875b692256b7ba13c9df9772723c79b7b9c7a5c322f1fb008a4->leave($__internal_88765b21554d1875b692256b7ba13c9df9772723c79b7b9c7a5c322f1fb008a4_prof);

        
        $__internal_e17468599c4cead4c29a12a53729aeb75d49d0b8a03dd6e65f72c4fe15885c39->leave($__internal_e17468599c4cead4c29a12a53729aeb75d49d0b8a03dd6e65f72c4fe15885c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
