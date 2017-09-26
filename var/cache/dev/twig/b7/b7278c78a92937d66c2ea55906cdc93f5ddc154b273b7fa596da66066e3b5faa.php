<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e8d4966cfe30487ba3601a60d65cc54b8d501d6c5c7f8f4490d9d536c09abe25 extends Twig_Template
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
        $__internal_e6f07cd2a36afd4bc74d81dbd37245a258620e1bc7031da4ad726aa8a1fd8f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f07cd2a36afd4bc74d81dbd37245a258620e1bc7031da4ad726aa8a1fd8f4f->enter($__internal_e6f07cd2a36afd4bc74d81dbd37245a258620e1bc7031da4ad726aa8a1fd8f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_70a7b9ccf3d52f15579b26fe2eb9b5fbb0b93a1536f5809d27956fcd924df638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a7b9ccf3d52f15579b26fe2eb9b5fbb0b93a1536f5809d27956fcd924df638->enter($__internal_70a7b9ccf3d52f15579b26fe2eb9b5fbb0b93a1536f5809d27956fcd924df638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e6f07cd2a36afd4bc74d81dbd37245a258620e1bc7031da4ad726aa8a1fd8f4f->leave($__internal_e6f07cd2a36afd4bc74d81dbd37245a258620e1bc7031da4ad726aa8a1fd8f4f_prof);

        
        $__internal_70a7b9ccf3d52f15579b26fe2eb9b5fbb0b93a1536f5809d27956fcd924df638->leave($__internal_70a7b9ccf3d52f15579b26fe2eb9b5fbb0b93a1536f5809d27956fcd924df638_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
